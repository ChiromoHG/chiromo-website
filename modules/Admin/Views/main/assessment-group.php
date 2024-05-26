<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\assessments-group-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('assessments-group-content-script') ?>
<script>
    $(document).ready(function () {
        $('#openNewAssessmentCategory').on('click', function () {
            $('#assessmentCategoryName').val('');
            $('#assessmentCategoryDescription').val('');
            $('#newCategoryModel').removeClass('hidden');
        });

        $('#closeCategoryModal').on('click', function () {
            $('#assessmentCategoryName').val('');
            $('#assessmentCategoryDescription').val('');
            $('#newCategoryModel').addClass('hidden');
        });

        createCategory();

        function createCategory(){

            $('#manageAssessmentCategoryDataTable').DataTable({
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
                    "emptyTable": "No assessments category available"
                },

                "responsive": true,

                rowReorder: {
                    selector: 'td:nth-child(2)'
                },

                order: [[1, 'asc']],

                ajax: {
                    url: '<?= base_url('admin/assessment/get_assessment_category') ?>',
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
                        data: 'assessment_category_name',
                        render: function (data, type, row) {
                            return data;
                        }
                    },
                    {
                        data: 'assessment_category_description',
                        render: function (data, type, row) {
                            return data;
                        }
                    },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return '<a href="<?= base_url('admin/assessment/questions') ?>/' + row.assessment_category_uuid + '" class="text-blue-700 hover:text-blue-900">View Questions</a>';
                        }
                    },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return `<button data-id=${row.assessment_category_uuid} class="btn btn-sm btn-outline-danger edit-assessment-category">
                                <i class="uil uil-edit"></i>
                                Edit
                            </button>`;
                        }
                    },
                ],
            })
        }

        // Validation function for assessmentCategoryName
        function validateCategoryName() {
            let categoryName = $('#assessmentCategoryName').val();

            if (categoryName.length === 0) {
                showError('This field is required');
                return false;
            } else if (categoryName.length > 20) {
                showError('This field cannot exceed 20 characters');
                return false;
            } else {
                clearError();
                return true;
            }
        }

        function showError(message) {
            $('#assessmentCategoryError').text(message);
            $('#assessmentCategoryName').addClass('border-red-500 focus:border-red-500');
        }

        function clearError() {
            $('#assessmentCategoryError').text('');
            $('#assessmentCategoryName').removeClass('border-red-500 focus:border-red-500');
        }


       // Validation function for assessmentCategoryDescription
        function validateCategoryDescription() {
            let categoryDescription = $('#assessmentCategoryDescription').val();

            if (categoryDescription.length > 30) {
                $('#assessmentCategoryDescriptionError').text('This field cannot exceed 30 characters');
                $('#assessmentCategoryDescription').addClass('border-red-500 focus:border-red-500');
                return false;
            } else {
                $('#assessmentCategoryDescriptionError').text('');
                $('#assessmentCategoryDescription').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }

       // Attach keyup event handlers
        $('#assessmentCategoryName').on('keyup', validateCategoryName);
        $('#assessmentCategoryDescription').on('keyup', validateCategoryDescription);

       // Click event for the createCategory button
        $('#createCategory').on('click', function () {
            // Validate both fields
            if (validateCategoryName() && validateCategoryDescription()) {
                // If validation passes, proceed with the AJAX call
                let categoryName = $('#assessmentCategoryName').val();
                let categoryDescription = $('#assessmentCategoryDescription').val();
                let assessmentCategoryId = $('#assessmentCategoryId').val();

                $('#createCategory').prop('disabled', true).html(' <span class="loading loading-dots loading-md pl-1"></span> saving category');
                $.ajax({
                    url: '<?= base_url('admin/assessment/create_assessment_category') ?>',
                    type: 'POST',
                    data: {
                        categoryName: categoryName,
                        categoryDescription: categoryDescription,
                        assessmentCategoryId: assessmentCategoryId
                    },
                    success: function (response) {
                        // Your success handling code
                        if (response.status === 200) {
                            if ($('#manageAssessmentCategoryDataTable').length > 0) {
                                $('#manageAssessmentCategoryDataTable').DataTable().destroy();
                                createCategory();
                            }
                            $('#newCategoryModel').addClass('hidden');
                            $('#assessmentCategoryName').val('');
                            $('#assessmentCategoryDescription').val('');
                            $('#assessmentCategoryError').text('');
                            $('#assessmentCategoryDescriptionError').text('');
                            $('#toast-success').removeClass('hidden');
                            $('#toast-success #toast-success-content').text(response.message);
                        } else if (response.status === 500) {
                            $('#assessmentCategoryName').addClass('border-red-500');
                            $('#assessmentCategoryName').focus();
                            $('#assessmentCategoryError').text(response.message);
                        }
                    },
                    error: function (response) {
                        $('#newCategoryModel').addClass('hidden');
                        $('#assessmentCategoryName').val('');
                        $('#assessmentCategoryDescription').val('');
                        $('#assessmentCategoryError').text('');
                        $('#assessmentCategoryDescriptionError').text('');
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text(response.message);
                    },

                    complete: function () {
                        $('#createCategory').prop('disabled', false).html('Save Category');
                    }
                });
            }
        });


        // Edit assessment category

        $(document).on('click', '#manageAssessmentCategoryDataTable tbody tr td button.edit-assessment-category', function () {
            let assessmentCategoryId = $(this).data('id');

            $.ajax({
                url: '<?= base_url('admin/assessment/get_assessment_category_by_id') ?>',
                type: 'GET',
                data: {
                    assessmentCategoryId: assessmentCategoryId
                },
                success: function (response) {

                    if (response.status === 200) {
                        $('#assessmentCategoryId').val(response.data[0]['assessment_category_uuid']);
                        $('#assessmentCategoryName').val(response.data[0]['assessment_category_name']);
                        $('#assessmentCategoryDescription').val(response.data[0]['assessment_category_description']);
                        $('#newCategoryModel').removeClass('hidden');
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
