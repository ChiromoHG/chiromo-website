<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\create-offer-content') ?>

<?= $this->endSection() ?>
<?= $this->section('create-offer-content-script') ?>
    <script>

        $(document).ready(function(){

            $('#openNewOffer').on('click', function () {
                $('#offerTitle').val('');
                $('#offer').val('');
                $('#startDate').val('');
                $('#endDate').val('');
                $('#newOfferModel').removeClass('hidden');
            });

            $('#closeOfferModal').on('click', function () {
                $('#newOfferModel').addClass('hidden');
            });


            createOffer();

            function createOffer(){
               $('#offerDataTable').DataTable({

                    dom: 'lfBrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            text: '<i class="uil uil-file-exclamation-alt"></i> Excel',
                            titleAttr: 'Transactions summery excel',
                            exportOptions: {
                                columns: [0, 1, 2]
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="uil uil-file-alt"></i> PDF',
                            titleAttr: 'Transactions summery pdf',
                            exportOptions: {
                                columns: [0, 1, 2]
                            }
                        },
                        {
                            extend: 'print',
                            text: '<i class="uil uil-document-info"></i> Print',
                            titleAttr: 'Transactions summery print',
                            exportOptions: {
                                columns: [0, 1, 2]
                            }
                        },
                    ],

                    scrollCollapse: true,
                    paging: true,

                    "language": {
                        "emptyTable": "Create a new Offer",
                    },

                    "responsive": true,

                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },

                    order: [[1, 'asc']],

                    ajax: {
                        url: '<?= base_url('admin/offer/get_offers') ?>',
                        type: 'GET',
                        dataSrc: function (response){
                            if(response.status === 200){
                                return response.data;
                            }else{
                                return [];
                            }
                        }
                    },

                    columns: [
                        { 
                            data : 'offer_title',
                            render: function(data, type, row){
                                let length = data.length;
                                if(length > 30){
                                    return `<span data-id="${row.offer_uuid}" class="text-sm font-semibold cursor-pointer text-black edit-offer">${data.substring(0, 30)}...</span>`;
                                }else{
                                    return `<span data-id="${row.offer_uuid}" class="text-sm font-semibold  cursor-pointer text-black edit-offer">${data}</span>`

                                }

                            }
                        },
                        { 
                            data : 'offer_start_date',
                            render: function(data, type, row){
                                let date = new Date(data);
                                let year = date.getFullYear();
                                let month = (date.getMonth() + 1).toString().padStart(2, '0');
                                let day = date.getDate().toString().padStart(2, '0');
                                let formatedDate = `${day}-${month}-${year}`
                                return `<span class="text-sm font-semibold text-black">${formatedDate}</span>`
                            }
                        },

                        { 
                            data : null,
                            render: function(data, type, row){
                            
                                let endDate = new Date(row.offer_end_date);

                                let now = new Date();
                                let remainingTime = (endDate - now);
                
                                if(remainingTime <= 0){
                                    return "<span class='text-sm font-semibold text-red-500'>Offer expired</span>";
                                }

                                let days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
                                let hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                let minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                                let seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

                                let countdown = `${days} days ${hours} hours ${minutes} minutes ${seconds} seconds`;
                                
                                return `<span class='text-sm font-semibold text-[#0060a3]'>${countdown}</span>`;
        
                            }
                        },

                        { 
                            data : 'offer',
                            render: function(data, type, row){
                                let number = parseFloat(data);
                                let wholeNumber = Math.floor(number);
                                return `<span class="text-sm font-semibold text-black">${wholeNumber} %</span>`;
                            }
                        },

                        { 
                        
                            data : null,
                            render: function(data, type, row){

                                let endDate = new Date(row.offer_end_date);

                                let now = new Date();
                                let remainingTime = (endDate - now);
                
                                if(remainingTime <= 0){
                                    return `<button data-id=${row.offer_uuid} class="btn btn-sm btn-outline-danger end-offer">
                                    <i class="uil uil-cancel"></i>
                                    End
                                    </button>`
                                }

                                return `<button data-id=${row.offer_uuid} class="btn btn-sm btn-outline-danger delete-offer">
                                <i class="uil uil-trash"></i>
                                    Delete
                                    </button>`
                            }
                        }
                    ]

                })
            }

            // validations
            function validateTitle(){

                let offerTitle = $('#offerTitle').val();

                if(offerTitle === '') {
                    $('#offerTitleError').text('This field is required');
                    $('#jobTitle').addClass('border-red-500 focus:border-red-500');
                    return false;
                }
                else if (offerTitle.length > 200) {
                    $('#offerTitleError').text('This field cannot exceed 200 characters');
                    $('#offerTitle').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#offerTitleError').text('');
                    $('#offerTitle').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }

            function validateOffer(){

                let jobType = $('#offer').val();

                if(jobType === '') {
                    $('#offerError').text('This field is required');
                    $('#offer').addClass('border-red-500 focus:border-red-500');
                    return false;
                }
                else {
                    $('#offerError').text('');
                    $('#offer').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }


            function validateStartDate(){

                let date = $('#startDate').val();

                if (date === '') {
                    $('#startDateError').text('This field cannot be null');
                    $('#closingDate').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#startDateError').text('');
                    $('#startDate').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }

            function validateEndDate(){

                let date = $('#endDate').val();

                if (date === '') {
                    $('#endDateError').text('This field cannot be null');
                    $('#endDate').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#endDateError').text('');
                    $('#endDate').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }

            $('#offerTitle').on('keyup', validateTitle);
            $('#offer').on('change', validateOffer);
            $('#startDate').on('change', validateStartDate);
            $('#endDate').on('change', validateEndDate);


            $('#createOffer').on('click', function (){
                if(validateTitle() && validateOffer() && validateStartDate() && validateEndDate()){
                    let offerId = $('#offerId').val();
                    let title = $('#offerTitle').val();
                    let offer = $('#offer').val();
                    let startDate = $('#startDate').val();
                    let endDate = $('#endDate').val(); 

                    $('#createOffer').prop('disabled', true).html(' <span class="loading loading-dots loading-md pl-1"></span> saving offer')

                    $.ajax({
                        url: '<?= base_url('admin/offer/create_offer') ?>',
                        type: 'POST',
                        data: {

                            offerId : offerId,
                            title : title,
                            offer : offer,
                            startDate : startDate,
                            endDate : endDate,
                        },
                        success: function (response){

                            if(response.status === 200){
                                if($('#offerDataTable').length > 0) {
                                    $('#offerDataTable').DataTable().destroy();
                                    createOffer();
                                }
                                $('#offerTitle').val('');
                                $('#offer').val('');
                                $('#startDate').val('');
                                $('#endDate').val('');
                                $('#newOfferModel').addClass('hidden');
                                $('#toast-success').removeClass('hidden');
                                $('#toast-success #toast-success-content').text(response.message);
                            }else if(response.status === 500){
                                $('#newOfferModel').addClass('hidden');
                                $('#toast-danger').removeClass('hidden');
                                $('#toast-danger #toast-danger-content').text(response.message);
                            }
                        },

                        error: function (error){
                            $('#newOfferModel').addClass('hidden');
                            $('#toast-danger').removeClass('hidden');
                            $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                        },
                        complete: function (){
                            $('#createOffer').prop('disabled', false).html('Save Offer');
                        }
                    })
                }else{
                    return false;
                }
            })


            // delete offer
            $(document).on('click', '#offerDataTable tbody tr td button.delete-offer', function(){
                let offerId = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('admin/offer/delete_offer') ?>",
                    type: 'POST',
                    data: {offerId: offerId},
                    success: function(response){
                        if(response.status === 200) {
                            $('#toast-success').removeClass('hidden');
                            $('#toast-success #toast-success-content').text(response.message); 
                            if($('#offerDataTable').length > 0) {
                                $('#offerDataTable').DataTable().destroy();
                                createOffer();
                            }
                        }else if(response.status === 400 || response.status === 404 || response.status === 500) {
                            $('#toast-error').removeClass('hidden');
                            $('#toast-error #toast-error-content').text(response.message);
                        }
                    },

                    error: function (jqXHR, textStatus, errorThrown){
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text('Unknown error!');
                    }
                })
            });


            // end offer

            $(document).on('click', '#offerDataTable tbody tr td button.end-offer', function(){
                let offerId = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('admin/offer/end_offer') ?>",
                    type: 'POST',
                    data: {offerId: offerId},
                    success: function(response){
                        if(response.status === 200) {
                            $('#toast-success').removeClass('hidden');
                            $('#toast-success #toast-success-content').text(response.message); 
                            if($('#offerDataTable').length > 0) {
                                $('#offerDataTable').DataTable().destroy();
                                createOffer();
                            }
                        }else if(response.status === 400 || response.status === 404 || response.status === 500){
                            $('#toast-error').removeClass('hidden');
                            $('#toast-error #toast-error-content').text(response.message);
                        }
                    },

                    error: function (jqXHR, textStatus, errorThrown){
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text('Unknown error!');
                    }
                })
            });

            // edit offer

            $(document).on('click', '#offerDataTable tbody tr td span.edit-offer', function(){
                let offerId = $(this).data('id');

                $.ajax({
                    url: "<?= base_url('admin/offer/get_offers_id') ?>",
                    type: 'POST',
                    data: {offerId: offerId},
                    success: function(response){
                        if(response.status === 200) {
                            $('#offerId').val(response.data[0]['offer_uuid']);
                            $('#offerTitle').val(response.data[0]['offer_title']);
                            $('#newOfferModel').removeClass('hidden');
                        }else if(response.status === 400 || response.status === 404 || response.status === 500){
                            $('#toast-error').removeClass('hidden');
                            $('#toast-error #toast-error-content').text(response.message);
                        }
                    },

                    error: function (jqXHR, textStatus, errorThrown){
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text('Unknown error!');
                    }
                })
            });



        });
    </script>
<?= $this->endSection() ?>