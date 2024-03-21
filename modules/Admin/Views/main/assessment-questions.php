<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\assessments-questions-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('assessments-group-content-script') ?>
    <script>
        $(document).ready(function (){

            $('#openNewAssessmentQuestion').on('click', function () {
                $('#assessmentQuestion').val('');
                $('#assessmentQuestionDescription').val('');
                $('#newQuestionModel').removeClass('hidden');
            });

            $('#closeQuestionModal').on('click', function () {
                $('#assessmentQuestion').val('');
                $('#assessmentQuestionDescription').val('');
                $('#newQuestionModel').addClass('hidden');
            });

            createQuestion();

            function createQuestion(){

                $('#manageAssessmentQuestionDataTable').dataTable({

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
                        "emptyTable": "No assessments questions available at the moment"
                    },

                    "responsive": true,

                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },

                    order: [[1, 'asc']],

                    ajax: {
                        url: '<?= base_url('admin/assessment/get_assessment_questions') ?>',
                        type: 'GET',
                        dataSrc: function (response) {
                            if(response.status === 200){
                                return response.data;
                            }else {
                                return [];
                            }
                        }
                    },

                    columns: [
                        {
                            data: 'assessment_category_name',
                            render: function (data, type, row) {
                                return `<span class="text-sm font-semibold bg-green-100 px-3 rounded-md">${data}</span>`;
                            }
                        },
                        {
                            data: 'assessment_question',
                            render: function (data, type, row) {
                                return data;
                            }
                        },
                        {
                            data: 'assessment_question_description',
                            render: function (data, type, row) {
                                return data;
                            }
                        },
                        {
                            data: null,
                            render: function (data, type, row) {
                                return `<button data-id=${row.assessment_question_uuid} class="btn btn-sm btn-outline-danger edit-assessment-question">
                                <i class="uil uil-edit"></i>
                                Edit
                            </button>`;
                            }
                        },
                    ],
                });

            }

            // Validation function for assessmentCategory

            function validateAssessmentCategory(){

                let assessmentCategory = $('#assessmentCategory').val();

                if(assessmentCategory === undefined || assessmentCategory.length === 0){
                    $('#assessmentCategoryError').text('This field is required');
                    $('#assessmentCategory').addClass('border-red-500 focus:border-red-500');
                    return false;
                }else{
                    $('#assessmentCategoryError').text('');
                    $('#assessmentCategory').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }

            function validateQuestion() {
                let question = $('#assessmentQuestion').val();

                if (question.length === 0) {
                    showError('This field is required');
                    return false;
                } else if (question.length > 200) {
                    showError('This field cannot exceed 20 characters');
                    return false;
                } else {
                    clearError();
                    return true;
                }
            }

            function showError(message) {
                $('#assessmentQuestionError').text(message);
                $('#assessmentQuestion').addClass('border-red-500 focus:border-red-500');
            }

            function clearError() {
                $('#assessmentQuestionError').text('');
                $('#assessmentQuestion').removeClass('border-red-500 focus:border-red-500');
            }


            // Validation function for assessmentQuestionDescription
            function validateQuestionDescription() {
                let categoryDescription = $('#assessmentQuestionDescription').val();

                if (categoryDescription.length > 30) {
                    $('#assessmentQuestionDescriptionError').text('This field cannot exceed 30 characters');
                    $('#assessmentQuestionDescription').addClass('border-red-500 focus:border-red-500');
                    return false;
                } else {
                    $('#assessmentQuestionDescriptionError').text('');
                    $('#assessmentQuestionDescription').removeClass('border-red-500 focus:border-red-500');
                    return true;
                }
            }


            // Attach keyup event handlers
            $('#assessmentCategory').on('keyup', validateAssessmentCategory);
            $('#assessmentQuestion').on('keyup', validateQuestion);
            $('#assessmentQuestionDescription').on('keyup', validateQuestionDescription);

            // click event for create question button

            $('#createQuestion').on('click', function () {

                if (validateAssessmentCategory() && validateQuestion() && validateQuestionDescription()) {


                    let assessmentQuestionId = $('#assessmentQuestionId').val();
                    let assessmentCategory = $('#assessmentCategory').val();
                    let assessmentQuestion = $('#assessmentQuestion').val();
                    let assessmentQuestionDescription = $('#assessmentQuestionDescription').val();


                    $('#createQuestion').prop('disabled', true).html(' <span class="loading loading-dots loading-md pl-1"></span> saving guestion..');

                    $.ajax({
                        url: '<?= base_url('admin/assessment/create_assessment_question') ?>',
                        type: 'POST',
                        data: {

                            assessmentQuestionId: assessmentQuestionId,
                            assessmentCategoryId: assessmentCategory,
                            assessmentQuestion: assessmentQuestion,
                            assessmentQuestionDescription: assessmentQuestionDescription,

                        },
                        success: function (response) {
                            // Your success handling code
                            if (response.status === 200) {
                                if ($('#manageAssessmentQuestionDataTable').length > 0) {
                                    $('#manageAssessmentQuestionDataTable').DataTable().destroy();
                                    createQuestion();
                                }
                                $('#newQuestionModel').addClass('hidden');
                                $('#assessmentQuestion').val('');
                                $('#assessmentQuestionContent').val('');
                                $('#assessmentQuestionError').text('');
                                $('#assessmentQuestionDescriptionError').text('');
                                $('#toast-success').removeClass('hidden');
                                $('#toast-success #toast-success-content').text(response.message);
                            } else if (response.status === 500) {
                                $('#newQuestionModel').addClass('hidden');
                                $('#toast-error').removeClass('hidden');
                                $('#toast-error #toast-error-content').text(response.message);
                            }
                        },
                        error: function (response) {
                            $('#newQuestionModel').addClass('hidden');
                            $('#toast-error').removeClass('hidden');
                            $('#toast-error #toast-error-content').text('There was an error, please try again later');
                        },

                        complete: function () {
                            $('#createQuestion').prop('disabled', false).html('Save Question');
                        }
                    });

                } else {
                    return false;
                }
            });


            // Edit assessment question

            $(document).on('click', '#manageAssessmentQuestionDataTable tbody tr td button.edit-assessment-question', function () {
                let assessmentQuestionId = $(this).data('id');

                $.ajax({
                    url: '<?= base_url('admin/assessment/get_assessment_questions_by_id') ?>',
                    type: 'GET',
                    data: {
                        assessmentQuestionId: assessmentQuestionId,
                    },
                    success: function (response) {
                        // Your success handling code
                        if (response.status === 200) {
                            $('#assessmentQuestionId').val(response.data[0].assessment_question_uuid);
                            $('#assessmentQuestion').val(response.data[0].assessment_question);
                            $('#assessmentQuestionDescription').val(response.data[0].assessment_question_description);
                            $('#newQuestionModel').removeClass('hidden');
                        } else if (response.status === 500) {
                            $('#toast-error').removeClass('hidden');
                            $('#toast-error #toast-error-content').text(response.message);
                        }
                    },
                    error: function (response) {
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text(response.message);
                    },
                });
            });


        })
    </script>
<?= $this->endSection() ?>