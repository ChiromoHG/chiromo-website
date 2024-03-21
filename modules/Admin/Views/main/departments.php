<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\departments-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('departments-content-script') ?>
<script>
    $(document).ready(function (){
        $('#openNewDepartment').on('click', function () {
            $('#departmentName').val('');
            $('#departmentDescription').val('');
            $('#newDepartmentModel').removeClass('hidden');
        });

        $('#closeDepartmentModal').on('click', function () {
            $('departmentName').val('');
            $('departmentDescription').val('');
            $('#newDepartmentModel').addClass('hidden');
        });

        createDepartment()

        function createDepartment(){

            $('#departmentDataTable').DataTable({
                dom: 'lfBrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: '<i class="uil uil-file-exclamation-alt"></i> Excel',
                        titleAttr: 'Transactions summery excel',
                        exportOptions: {
                            columns: [0, 1]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="uil uil-file-alt"></i> PDF',
                        titleAttr: 'Transactions summery pdf',
                        exportOptions: {
                            columns: [0, 1]
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="uil uil-document-info"></i> Print',
                        titleAttr: 'Transactions summery print',
                        exportOptions: {
                            columns: [0, 1]
                        }
                    },
                ],

                scrollCollapse: true,
                paging: true,

                "language": {
                    "emptyTable": "No departments found",
                },

                "responsive": true,

                rowReorder: {
                    selector: 'td:nth-child(2)'
                },

                order: [[1, 'asc']],

                ajax: {
                    url: '<?= base_url('admin/department/get_all_departments') ?>',
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
                            return data;
                        }
                    },
                    {
                        data: 'department_description',
                        render: function (data, type, row) {
                            return data;
                        }
                    },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return `<button data-id=${row.department_uuid} class="btn btn-sm btn-outline-danger edit-department">
                                <i class="uil uil-edit"></i>
                                Edit
                            </button>`;
                        }
                    },
                ],
            })
        }

        // Validation function for departmentName
        function validateDepartmentName() {
            let departmentName = $('#departmentName').val();

            if (departmentName.length === 0) {
                showError('This field is required');
                return false;
            } else if (departmentName.length > 50) {
                showError('This field cannot exceed 50 characters');
                return false;
            } else {
                clearError();
                return true;
            }
        }

        function showError(message) {
            $('#departmentNameError').text(message);
            $('#departmentName').addClass('border-red-500 focus:border-red-500');
        }

        function clearError() {
            $('#departmentNameError').text('');
            $('#departmentName').removeClass('border-red-500 focus:border-red-500');
        }


        // Validation function for department
        function validateDepartmentDescription() {
            let departmentDescription = $('#departmentDescription').val();

            if (departmentDescription.length > 100) {
                $('#departmentDescriptionError').text('This field cannot exceed 100 characters');
                $('#departmentDescription').addClass('border-red-500 focus:border-red-500');
                return false;
            } else {
                $('#departmentDescriptionError').text('');
                $('#departmentDescription').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }

        // Attach keyup event handlers
        $('#departmentName').on('keyup', validateDepartmentName);
        $('#departmentDescription').on('keyup', validateDepartmentDescription);


        // Click event for the department button
        $('#createDepartment').on('click', function () {
            // Validate both fields
            if (validateDepartmentName() && validateDepartmentDescription()) {
                // If validation passes, proceed with the AJAX call
                let departmentName = $('#departmentName').val();
                let departmentDescription = $('#departmentDescription').val();
                let departmentId = $('#departmentId').val();

                $('#createDepartment').prop('disabled', true).html(' <span class="loading loading-dots loading-md pl-1"></span> saving department');
                $.ajax({
                    url: '<?= base_url('admin/department/create_hospital_department') ?>',
                    type: 'POST',
                    data: {
                        departmentName: departmentName,
                        departmentDescription: departmentDescription,
                        departmentId: departmentId
                    },
                    success: function (response) {
                        if (response.status === 200) {
                            if ($('#departmentDataTable').length > 0) {
                                $('#departmentDataTable').DataTable().destroy();
                                createDepartment();
                            }
                            $('#newDepartmentModel').addClass('hidden');
                            $('#departmentName').val('');
                            $('#departmentDescription').val('');
                            $('#departmentError').text('');
                            $('#departmentDescriptionError').text('');
                            $('#toast-success').removeClass('hidden');
                            $('#toast-success #toast-success-content').text(response.message);
                        } else if (response.status === 500) {
                            $('#departmentName').addClass('border-red-500');
                            $('#departmentName').focus();
                            $('#departmentCategoryError').text(response.message);
                        }
                    },
                    error: function (response) {
                        $('#newDepartmentModel').addClass('hidden');
                        $('#departmentName').val('');
                        $('#departmentDescription').val('');
                        $('#departmentError').text('');
                        $('#departmentDescriptionError').text('');
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text(response.message);
                    },

                    complete: function () {
                        $('#createDepartment').prop('disabled', false).html('Save Department');
                    }
                });
            }
        });

        // Edit assessment category

        $(document).on('click', '#departmentDataTable tbody tr td button.edit-department', function () {
            let departmentId = $(this).data('id');

            $.ajax({
                url: '<?= base_url('admin/department/get_department_by_id') ?>',
                type: 'GET',
                data: {
                    departmentId: departmentId
                },
                success: function (response) {

                    if (response.status === 200) {
                        $('#departmentId').val(response.data[0]['department_uuid']);
                        $('#departmentName').val(response.data[0]['department_name']);
                        $('#departmentDescription').val(response.data[0]['department_description']);
                        $('#newDepartmentModel').removeClass('hidden');
                    } else if (response.status === 500) {
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text(response.message);
                    }
                },
                error: function (response) {
                    $('#toast-error').removeClass('hidden');
                    $('#toast-error #toast-error-content').text(response.message);
                }
            });
        });

    });
</script>
<?= $this->endSection() ?>