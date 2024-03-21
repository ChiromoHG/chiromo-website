<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\create-job-content') ?>

<?= $this->endSection() ?>
<?= $this->section('create-job-content-script') ?>
    <script>
        $(document).ready(function (){

            $('#openNewCarousel').on('click', function () {
                $('#newCarouselModel').removeClass('hidden');
            });

            $('#closeJobModal').on('click', function () {
                $('#newCarouselModel').addClass('hidden');
            });


            createJob();

            function createJob(){

                $('#jobDataTable').DataTable({

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
                        "emptyTable": "Create a new job",
                    },

                    "responsive": true,

                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },

                    order: [[1, 'asc']],

                    ajax: {
                        url: '<?= base_url('admin/jobs/get_jobs') ?>',
                        type: 'GET',
                        dataSrc: function (response){
                            if(response.status === 200){
                                return response.data;
                            }else{
                                return [];
                            }
                        }
                    },

                    columns:[
                        {
                            data: 'job_title',
                            render: function (data, type, row){
                                let length = data.length;
                                if(length > 20) {
                                    return `<span class="text-sm font-semibold">${data.substring(0, 20)}...</span>`;
                                }else {
                                    return `<span class="text-sm font-semibold">${data}</span>`
                                }
                            }
                        },
                        {
                            data: 'job_closing_date',
                            render: function (data, type, row){
                                return `<span class="text-sm font-semibold">${data}</span>`;
                            }
                        },
                        {
                            data: 'job_uuid',
                            render: function (data, type, row){
                                return `<button class="bg-[#0060a3] text-white hover:bg-[#0060a3] font-normal py-1 px-2 rounded" onclick="editCarousel('${data}')">
                                        <i class="uil uil-edit"></i>
                                    </button>
                                    <button class="bg-red-500 text-white hover:bg-red-600 font-normal py-1 px-2 rounded" onclick="deleteCarousel('${data}')">
                                        <i class="uil uil-trash-alt"></i>
                                    </button>`;
                            }
                        }
                    ]
                });

            }

        //     validations

            function validateTitle(){

                let jobTitle = $('#jobTitle').val();

                if(jobTitle === '') {
                    $('#jobTitleError').text('This field is required');
                    $('#jobTitle').addClass('border-red-500 focus:border-red-500');
                    return false;
                }
                else if (jobTitle.length > 100) {
                    $('#jobTitleError').text('This field cannot exceed 100 characters');
                    $('#jobTitle').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#jobTitleError').text('');
                    $('#jobTitle').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }


            function validateJobType(){

                let jobType = $('#jobType').val();

                if(jobType === '') {
                    $('#jobTypeError').text('This field is required');
                    $('#jobType').addClass('border-red-500 focus:border-red-500');
                    return false;
                }
                else if (jobType.length > 100) {
                    $('#jobTypeError').text('This field cannot exceed 100 characters');
                    $('#jobType').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#jobTypeError').text('');
                    $('#jobType').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }

            function validateCategory(){

                let category = $('#category').val();

                if(category === '') {
                    $('#categoryError').text('This field is required');
                    $('#category').addClass('border-red-500 focus:border-red-500');
                    return false;
                }
                else if (category.length > 100) {
                    $('#categoryError').text('This field cannot exceed 100 characters');
                    $('#category').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#categoryError').text('');
                    $('#category').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }

            function validateLocation(){

                let location = $('#location').val();

                if(location === '') {
                    $('#locationError').text('This field is required');
                    $('#location').addClass('border-red-500 focus:border-red-500');
                    return false;
                }
                else if (location.length > 100) {
                    $('#locationError').text('This field cannot exceed 100 characters');
                    $('#location').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#locationError').text('');
                    $('#location').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }

            function validateDescription(){

                let description = $('#jobDescription').val();

                if(description === '') {
                    $('#jobDescriptionError').text('This field is required');
                    $('#jobDescription').addClass('border-red-500 focus:border-red-500');
                }
                else if (description.length > 500) {
                    $('#jobDescriptionError').text('This field cannot exceed 100 characters');
                    $('#jobDescription').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#jobDescriptionError').text('');
                    $('#jobDescription').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }


            function validateDate(){

                let date = $('#closingDate').val();

                if (date === '') {
                    $('#closingDateError').text('This field cannot be null');
                    $('#closingDate').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#closingDateError').text('');
                    $('#closingDate').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }


            function validateLink(){

                let date = $('#link').val();

                if (date === '') {
                    $('#linkError').text('This field cannot be null');
                    $('#link').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#linkError').text('');
                    $('#link').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }


            function validateImageUpload() {
                let imageUpload = $('#uploadImage')[0].files[0];
                let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                let maxFileSize = 5 * 1024 * 1024;

                if (!allowedExtensions.exec(imageUpload.name)) {
                    $('#uploadImageError').text('Invalid file type');
                    $('#uploadImage').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else if (imageUpload.size > maxFileSize) {
                    $('#uploadImageError').text('File size cannot exceed 5MB');
                    $('#uploadImage').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#uploadImageError').text('');
                    $('#uploadImage').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }

            function validateDisclaimer(){

                let disclaimer = $('#disclaimer').val();

                if (disclaimer.length > 400) {
                    $('#disclaimerError').text('This field cannot exceed 400 characters');
                    $('#disclaimer').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#disclaimerError').text('');
                    $('#disclaimer').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }

            $('#jobTitle').on('keyup', validateTitle);
            $('#jobType').on('change', validateJobType);
            $('#category').on('keyup', validateCategory);
            $('#location').on('keyup', validateLocation);
            $('#jobDescription').on('keyup', validateDescription);
            $('#closingDate').on('change', validateDate);
            $('#link').on('change', validateLink);
            $('#uploadImage').on('change', validateImageUpload);
            $('#disclaimer').on('keyup', validateDisclaimer);


            $('#createJob').on('click', function (){

                if(validateTitle() && validateJobType() && validateCategory() && validateLocation() && validateDescription() && validateDate() && validateLink() && validateImageUpload() && validateDisclaimer()){
                    let formData = new FormData();
                    formData.append('title', $('#jobTitle').val());
                    formData.append('type', $('#jobType').val());
                    formData.append('category', $('#category').val());
                    formData.append('location', $('#location').val());
                    formData.append('description', $('#jobDescription').val());
                    formData.append('date', $('#closingDate').val());
                    formData.append('image', $('#uploadImage')[0].files[0]);
                    formData.append('disclaimer', $('#disclaimer').val());
                    formData.append('link', $('#link').val());


                    $('#saveJob').prop('disabled', true).html('<span class="loading loading-spinner loading-sm"></span>');
                    $.ajax({
                        url: '<?= base_url('admin/jobs/save_job') ?>',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response){
                            if(response.status === 200){
                                $('#jobDataTable').DataTable().ajax.reload();
                                createJob();
                                $('#jobTitle').val('');
                                $('#jobType').val('');
                                $('#category').val('');
                                $('#location').val('');
                                $('#jobDescription').val('');
                                $('#closingDate').val('');
                                $('#uploadImage').val('');
                                $('#disclaimer').val('');
                                $('#link').val('');
                                $('#newCarouselModel').addClass('hidden');
                                $('#toast-success').removeClass('hidden');
                                $('#toast-success #toast-success-content').text(response.message);
                            }else if(response.status === 500){
                                $('#newCarouselModel').addClass('hidden');
                                $('#toast-danger').removeClass('hidden');
                                $('#toast-danger #toast-danger-content').text(response.message);
                            }
                        },
                        error: function (error){
                            $('#newCarouselModel').addClass('hidden');
                            $('#toast-danger').removeClass('hidden');
                            $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                        },
                        complete: function (){
                            $('#saveJob').prop('disabled', false).html('Save Job');
                        }
                    })
                }else{

                    return false;
                }
            });

        })
    </script>
<?= $this->endSection() ?>