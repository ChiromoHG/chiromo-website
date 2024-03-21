<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\create-carousel-content') ?>

<?= $this->endSection() ?>
<?= $this->section('create-carousel-content-script') ?>
<script>
    $(document).ready(function (){
        $('#openNewCarousel').on('click', function () {
            $('#newCarouselModel').removeClass('hidden');
        });

        $('#closeCarouselModal').on('click', function () {
            $('#newCarouselModel').addClass('hidden');
        });

        createCarousel();

        function createCarousel(){

            $('#carouselDataTable').DataTable({

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
                    "emptyTable": "Create a new carousel",
                },

                "responsive": true,

                rowReorder: {
                    selector: 'td:nth-child(2)'
                },

                order: [[1, 'asc']],

                ajax: {
                    url: '<?= base_url('admin/carousel/get_carousel') ?>',
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
                        data: 'carousel_title',
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
                        data: 'carousel_description',
                        render: function (data, type, row){
                            let length = data.length;
                            if(length > 20) {
                                return `<span class="text-sm">${data.substring(0, 20)}...</span>`;
                            }else {
                                return `<span class="text-sm">${data}</span>`
                            }
                        }
                    },
                    {
                        data: 'carousel_image',
                        render: function (data, type, row){
                            let imagePath = '<?= base_url('uploads/carousel')?>/' + data;
                            return `<img src="${imagePath}" class="w-20 h-10 rounded-md" alt="carousel image">`;
                        }

                    },
                    {
                        data: 'carousel_has_button',
                        render: function (data, type, row){
                            if(data === '1'){
                                return `<span class="text-sm bg-[#0060a3] text-white rounded-sm py-1 px-2">Yes</span>`;
                            }else{
                                return `<span class="text-sm bg-red-300 text-red-500 rounded-sm py-1 px-2">No</span>`;
                            }
                        }
                    },

                    {
                        data: 'carousel_uuid',
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

        //validation

        function validateCarouselTitle(){
            let carouselTitle = $('#carouselTitle').val();

            if (carouselTitle.length > 50) {
                $('#carouselTitleError').text('This field cannot exceed 50 characters');
                $('#carouselTitle').addClass('border-red-500 focus:border-red-500');
                return false;
            } else {
                $('#carouselTitleError').text('');
                $('#carouselTitle').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }

        function validateCarouselDescription(){
            let carouselDescription = $('#carouselDescription').val();

            if (carouselDescription.length > 100) {
                $('#carouselDescriptionError').text('This field cannot exceed 100 characters');
                $('#carouselDescription').addClass('border-red-500 focus:border-red-500');
                return false;
            } else {
                $('#carouselDescriptionError').text('');
                $('#carouselDescription').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }

        function validateImageUpload() {
            let imageUpload = $('#uploadImage')[0].files[0];
            let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            let maxFileSize = 5 * 1024 * 1024;


            if (imageUpload === undefined) {
                $('#uploadImageError').text('Please select an image');
                $('#uploadImage').addClass('border-red-500 focus:border-red-500');
                return false;
            }
            else if (!allowedExtensions.exec(imageUpload.name)) {
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


        function validateCarouselTag(){
            let carouselTag = $('#tag').val();

            if (carouselTag.length > 30) {
                $('#tagError').text('This field cannot exceed 30 characters');
                $('#tag').addClass('border-red-500 focus:border-red-500');
                return false;
            } else {
                $('#tagError').text('');
                $('#tag').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }


        $('#carouselTitle').on('keyup',  validateCarouselTitle);
        $('#carouselDescription').on('keyup',  validateCarouselDescription);
        $('#uploadImage').on('change',  validateImageUpload);
        $('#tag').on('keyup',  validateCarouselTag);

        $('#createCarousel').on('click', function () {

            if (validateCarouselTitle() && validateCarouselDescription() && validateImageUpload() && validateCarouselTag()) {
                let title = $('#carouselTitle').val();
                let description = $('#carouselDescription').val();
                let image = $('#uploadImage')[0].files[0];
                let tag = $('#tag').val();
                let hasButton = $('#carouselCheckbox').is(':checked');

                if(hasButton){
                    hasButton = 1;
                }else{
                    hasButton = 0;
                }


                let formData = new FormData();
                formData.append('title', title);
                formData.append('description', description);
                formData.append('image', image);
                formData.append('tag', tag);
                formData.append('hasButton', hasButton);


                $('#createCarousel').prop('disabled', true).html('<span class="loading loading-spinner loading-sm"></span>');
                $.ajax({
                    url: '<?= base_url('admin/carousel/create_carousel') ?>',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response.status === 200) {
                            $('#carouselDataTable').DataTable().destroy();
                            $('#carouselDataTable tbody').append(response.data);
                            createCarousel();
                            $('#newCarouselModel').addClass('hidden');
                            $('#carouselTitle').val('');
                            $('#carouselDescription').val('');
                            $('#uploadImage').val('');
                            $('#tag').val('');
                            $('#carouselCheckbox').prop('checked', false);
                            $('#toast-success').removeClass('hidden');
                            $('#toast-success #toast-success-content').text(response.message);
                        }else if(response.status === 500){
                            $('#newCarouselModel').addClass('hidden');
                            $('#toast-danger').removeClass('hidden');
                            $('#toast-danger #toast-danger-content').text(response.message);
                        }
                    },

                    error: function (error) {
                        $('#newCarouselModel').addClass('hidden');
                        $('#toast-danger').removeClass('hidden');
                        $('#toast-danger #toast-danger-content').text('Internal server error, please try again later');
                    },

                    complete: function (){
                        $('#createCarousel').prop('disabled', false).html('Save Carousel');
                    }
                });
            }else{
                return false;
            }
        });

    })
</script>
<?= $this->endSection() ?>