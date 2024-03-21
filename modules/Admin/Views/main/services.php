<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\services-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('services-content-script') ?>
<script>
    $(document).ready(function (){


        $('#openNewService').on('click', function () {
            $('#serviceName').val('');
            $('#serviceDescription').val('');
            $('#newServiceModel').removeClass('hidden');
        });

        $('#closeServiceModal').on('click', function () {
            $('#serviceName').val('');
            $('#serviceDescription').val('');
            $('#newServiceModel').addClass('hidden');
        });

        createService();

        function createService(){

            $('#serviceDataTable').dataTable({

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
                    "emptyTable": "No records found"
                },

                "responsive": true,

                rowReorder: {
                    selector: 'td:nth-child(2)'
                },

                order: [[1, 'asc']],

                ajax: {
                    url: '<?= base_url('admin/service/get_all_services') ?>',
                    type: 'GET',
                    dataSrc: function (response) {
                        if(response.status === 200){
                            return response.data;
                        }else{
                            return [];
                        }
                    }
                },

                columns: [
                    {
                        data: 'department_name',
                        render: function (data, type, row) {
                            return `<span class="text-sm font-semibold bg-green-100 px-3 rounded-md">${data}</span>`;
                        }
                    },
                    {
                        data: 'service_name',
                        render: function (data, type, row) {
                            return data;
                        }
                    },
                    {
                        data: 'service_price',
                        render: function (data, type, row) {
                            return `<span class="text-sm font-semibold">Ksh: ${data}</span>`;
                        }
                    },
                    {
                        data: 'service_description',
                        render: function (data, type, row) {
                            return data;
                        }
                    },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return `<button data-id=${row.service_uuid} class="btn btn-sm btn-outline-danger edit-service">
                                <i class="uil uil-edit"></i>
                                Edit
                            </button>`;
                        }
                    },
                ],
            });
        }

        // Validation function for assessmentCategory

        function validateDepartment(){

            let departmentName = $('#departmentName').val();

            if(departmentName === undefined || departmentName.length === 0){
                $('#departmentNameError').text('This field is required');
                $('#departmentName').addClass('border-red-500 focus:border-red-500');
                return false;
            }else{
                $('#departmentNameError').text('');
                $('#departmentName').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }

        function validateServiceName() {
            let serviceName = $('#serviceName').val();

            if (serviceName.length === 0) {
                showError('This field is required');
                return false;
            } else if (serviceName.length > 100) {
                showError('This field cannot exceed 100 characters');
                return false;
            } else {
                clearError();
                return true;
            }
        }

        function showError(message) {
            $('#serviceNameError').text(message);
            $('#serviceName').addClass('border-red-500 focus:border-red-500');
        }

        function clearError() {
            $('#serviceNameError').text('');
            $('#serviceName').removeClass('border-red-500 focus:border-red-500');
        }


        function validateServicePrice() {
            let servicePrice = $('#servicePrice').val();

            if (servicePrice.length === 0) {
                showPriceError('This field is required');
                return false;
            } else if (servicePrice.length > 6) {
                showPriceError('This field cannot exceed 6 characters');
                return false;
            } else {
                clearPriceError();
                return true;
            }
        }


        function showPriceError(message) {
            $('#servicePriceError').text(message);
            $('#servicePrice').addClass('border-red-500 focus:border-red-500');
        }

        function clearPriceError() {
            $('#servicePriceError').text('');
            $('#servicePrice').removeClass('border-red-500 focus:border-red-500');
        }


        // Validation function for assessmentQuestionDescription
        function validateServiceDescription() {
            let categoryDescription = $('#serviceDescription').val();

            if (categoryDescription.length > 100) {
                $('#serviceDescriptionError').text('This field cannot exceed 100 characters');
                $('#serviceDescription').addClass('border-red-500 focus:border-red-500');
                return false;
            } else {
                $('#serviceDescriptionError').text('');
                $('#serviceDescription').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }


        // Attach keyup event handlers
        $('#departmentName').on('keyup', validateDepartment);
        $('#serviceName').on('keyup', validateServiceName);
        $('#servicePrice').on('keyup', validateServicePrice);
        $('#serviceDescription').on('keyup', validateServiceDescription);

        $('#createService').on('click', function () {

            if (validateDepartment() && validateServiceName() && validateServicePrice() && validateServiceDescription()) {


                let serviceId = $('#serviceId').val();
                let department = $('#departmentName').val();
                let serviceName = $('#serviceName').val();
                let servicePrice = $('#servicePrice').val();
                let serviceDescription = $('#serviceDescription').val();


                $('#createService').prop('disabled', true).html(' <span class="loading loading-dots loading-md pl-1"></span> saving service');

                $.ajax({
                    url: '<?= base_url('admin/service/create_service') ?>',
                    type: 'POST',
                    data: {

                        serviceId: serviceId,
                        department: department,
                        serviceName: serviceName,
                        servicePrice: servicePrice,
                        serviceDescription: serviceDescription,

                    },
                    success: function (response) {
                        // Your success handling code
                        if (response.status === 200) {
                            if ($('#serviceDataTable').length > 0) {
                                $('#serviceDataTable').DataTable().destroy();
                                createService();
                            }
                            $('#newServiceModel').addClass('hidden');
                            $('#serviceName').val('');
                            $('#serviceDescription').val('');
                            $('#serviceNameError').text('');
                            $('#serviceDescriptionError').text('');
                            $('#toast-success').removeClass('hidden');
                            $('#toast-success #toast-success-content').text(response.message);
                        } else if (response.status === 500) {
                            $('#newServiceModel').addClass('hidden');
                            $('#toast-error').removeClass('hidden');
                            $('#toast-error #toast-error-content').text(response.message);
                        }
                    },
                    error: function (response) {
                        $('#newServiceModel').addClass('hidden');
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text('There was an error, please try again later');
                    },

                    complete: function () {
                        $('#createService').prop('disabled', false).html('Save Service');
                    }
                });

            } else {
                return false;
            }
        });

        // Edit assessment question

        $(document).on('click', '#serviceDataTable tbody tr td button.edit-service', function () {

            let serviceId = $(this).data('id');

            $.ajax({
                url: '<?= base_url('admin/service/get_service_by_id') ?>',
                type: 'GET',
                data: {
                    serviceId: serviceId,
                },
                success: function (response) {
                    // Your success handling code
                    if (response.status === 200) {
                        $('#serviceId').val(response.data[0].service_uuid);
                        $('#serviceName').val(response.data[0].service_name);
                        $('#servicePrice').val(response.data[0].service_price);
                        $('#serviceDescription').val(response.data[0].service_description);
                        $('#newServiceModel').removeClass('hidden');
                    } else if (response.status === 500) {
                        $('#newServiceModel').addClass('hidden');
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text(response.message);
                    }
                },
                error: function (response) {
                    $('#newServiceModel').addClass('hidden');
                    $('#toast-error').removeClass('hidden');
                    $('#toast-error #toast-error-content').text(response.message);
                },
            });
        });

    })
</script>
<?= $this->endSection() ?>
