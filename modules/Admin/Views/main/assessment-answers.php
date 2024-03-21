<?= $this->extend('Modules\Admin\Views\base\base.php') ?>
<?= $this->section('content') ?>

<?=  view_cell('Modules\Admin\Cells\SideBarCell::display')?>
<?= $this->include('Modules\Admin\Views\partials\assessments-answers-content.php') ?>

<?= $this->endSection() ?>
<?= $this->section('assessments-answers-content-script') ?>
<script>

    $(document).ready(function () {

        $('#openNewAssessmentAnswers').on('click', function () {
            $('#assessmentAnswersName').val('');
            $('#assessmentAnswersDescription').val('');
            $('#newAnswersModel').removeClass('hidden');
        });

        $('#closeAnswersModal').on('click', function () {
            $('#assessmentAnswersName').val('');
            $('#assessmentAnswersDescription').val('');
            $('#newAnswersModel').addClass('hidden');
        });

        createAnswers();

        function createAnswers(){

            $('#manageAssessmentAnswersDataTable').DataTable({
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
                    "emptyTable": "No assessments answers available at the moment"
                },

                "responsive": true,

                rowReorder: {
                    selector: 'td:nth-child(2)'
                },

                order: [[1, 'asc']],

                ajax: {
                    url: '<?= base_url('admin/assessment/get_assessment_answers') ?>',
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
                            return `<span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm">${data}</span>`;
                        }
                    },
                    {
                        data: 'assessment_question',
                        render: function (data, type, row) {
                            return data;
                        }
                    },
                    {
                        data: 'count_answers',
                        render: function (data, type, row) {
                            return `<span class="flex items-center justify-center w-5 h-5 bg-slate-200 text-sm rounded-full">${data}</span>`;
                        }
                    },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return `<button data-id=${row.assessment_question_uuid} class="btn btn-sm btn-outline-danger edit-assessment-answer">
                                <i class="uil uil-edit"></i>
                                Edit
                            </button>`;
                        }
                    },
                ],
            })
        }

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

        function validateAssessmentQuestions(){

            let assessmentCategory = $('#assessmentQuestion').val();

            if(assessmentCategory === undefined || assessmentCategory.length === 0){
                $('#assessmentQuestionError').text('This field is required');
                $('#assessmentQuestion').addClass('border-red-500 focus:border-red-500');
                return false;
            }else{
                $('#assessmentQuestionError').text('');
                $('#assessmentQuestion').removeClass('border-red-500 focus:border-red-500');
                return true;
            }
        }

        function validateAssessmentAnswers() {
            let question = $('#assessmentAnswers').val();

            if (question.length === 0) {
                showError('This field is required');
                return false;
            } else if (question.length > 100) {
                showError('This field cannot exceed 100 characters');
                return false;
            } else {
                clearError();
                return true;
            }
        }

        function showError(message) {
            $('#assessmentQuestionAnswers').text(message);
            $('#assessmentAnswers').addClass('border-red-500 focus:border-red-500');
        }

        function clearError() {
            $('#assessmentQuestionAnswers').text('');
            $('#assessmentAnswers').removeClass('border-red-500 focus:border-red-500');
        }

        function getAssessmentCategoryById(){

            let assessmentCategoryId = $('#assessmentCategory').val();

            $.ajax({
                url: '<?= base_url('admin/assessment/get_assessment_questions_category') ?>',
                type: 'GET',
                data: {
                    assessmentCategoryId: assessmentCategoryId
                },
                success: function (response) {
                    if(response.status === 200){
                        let options = '';
                        response.data.forEach(function (item) {
                            options += `<option class="question-list" value="${item.assessment_question_uuid}">${item.assessment_question}</option>`;
                        });
                        $('#assessmentQuestion').html(options);
                    }else{
                        return false;
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            })
        }


        $('#assessmentCategory').on('keyup', validateAssessmentCategory);
        $('#assessmentQuestion').on('keyup', validateAssessmentQuestions);
        $('#assessmentAnswers').on('keyup', validateAssessmentAnswers);
        getAssessmentCategoryById();
        $('#assessmentCategory').on('change', getAssessmentCategoryById);



        $('#createAnswers').on('click', function (){

            if(validateAssessmentCategory() && validateAssessmentQuestions() && validateAssessmentAnswers()){

                let assessmentCategoryId = $('#assessmentCategory').val();
                let assessmentQuestionId = $('#assessmentQuestion').val();
                let assessmentAnswers = $('#assessmentAnswers').val();
                let assessmentAnswersId = $('#assessmentAnswersId').val();

                $('#createAnswers').prop('disabled', true).html(' <span class="loading loading-dots loading-md pl-1"></span> saving answer..');
                $.ajax({
                    url: '<?= base_url('admin/assessment/create_assessment_answers') ?>',
                    type: 'POST',
                    data: {
                        assessmentCategoryId: assessmentCategoryId,
                        assessmentQuestionId: assessmentQuestionId,
                        assessmentAnswers: assessmentAnswers,
                        assessmentAnswersId: assessmentAnswersId
                    },
                    success: function (response) {
                        if(response.status === 200){
                            if ($('#manageAssessmentAnswersDataTable').length > 0) {
                                $('#manageAssessmentAnswersDataTable').DataTable().destroy();
                                createAnswers();
                            }
                            $('#newAnswersModel').addClass('hidden');
                            $('#assessmentAnswers').val('');
                            $('#toast-success').removeClass('hidden');
                            $('#toast-success #toast-success-content').text(response.message);
                        }else{
                            $('#newAnswersModel').addClass('hidden');
                            $('#toast-error').removeClass('hidden');
                            $('#toast-error #toast-error-content').text(response.message);
                        }
                    },
                    error: function (error) {
                        $('#newAnswersModel').addClass('hidden');
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text('Internal server error, please try again later');
                    },
                    complete: function () {
                        $('#createAnswers').prop('disabled', false).html('Save Answer');
                    }
                })

            }else{
                return false;
            }
        });


        $('#manageAssessmentAnswersDataTable').on('click', '.edit-assessment-answer', function () {
            let assessmentQuestionId = $(this).data('id');

            $.ajax({
                url: '<?= base_url('admin/assessment/get_assessment_answers_with_quesId') ?>',
                type: 'GET',
                data: {
                    assessmentQuestionId: assessmentQuestionId
                },
                success: function (response) {
                    if(response.status === 200){
                        let options = '';
                        response.data.forEach(function (item) {
                            options += `<option class="answer-edit-list" value="${item.assessment_answer_uuid}">${item.assessment_answer}</option>`;
                        });
                        $('#assessmentAnswersOptions').html(options);
                        $('#newEditAnswersModel').removeClass('hidden');
                        // getAnswerId();
                        saveEditAnswer();
                    }else{

                        $('#newEditAnswersModel').addClass('hidden');
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text(response.message);
                    }
                },
                error: function (error) {

                }
            })
        })

        function getAnswerId() {

            let answer = $('#assessmentEditAnswers').val();
            let selectedAnswerId = $('#assessmentAnswersOptions .answer-edit-list').val();
            let assessmentTextLoad = $('#assessmentAnswersOptions option:selected').text();
            $('#assessmentEditAnswers').val(assessmentTextLoad);

            editQuestion(selectedAnswerId, answer)

            $('#assessmentAnswersOptions').on('change', function () {
                let assessmentAnswersId = $(this).val();
                let assessmentText = $(this).find(':selected').text();
                $('#assessmentEditAnswers').val(assessmentText);
                editQuestion(assessmentAnswersId, answer)
            })

        }

        function saveEditAnswer() {
            $('#createAnswers').on('click', function (){
                console.log('save edit answer');
                getAnswerId();
            })
        }

        function editQuestion(answerId, answerData){
            
            $.ajax({

                url: '<?= base_url('admin/assessment/update_assessment_answers_with_quesId') ?>',
                type: 'POST',
                data: {
                    answerId: answerId,
                    answerData: answerData
                },
                success: function (response) {
                    if(response.status === 200){
                        if ($('#manageAssessmentAnswersDataTable').length > 0) {
                            $('#manageAssessmentAnswersDataTable').DataTable().destroy();
                            createAnswers();
                        }
                        $('#newEditAnswersModel').addClass('hidden');
                        $('#assessmentEditAnswers').val('');
                        $('#toast-success').removeClass('hidden');
                        $('#toast-success #toast-success-content').text(response.message);
                    }else{
                        $('#newEditAnswersModel').addClass('hidden');
                        $('#toast-error').removeClass('hidden');
                        $('#toast-error #toast-error-content').text(response.message);
                    }
                },
                error: function (error) {
                    $('#newEditAnswersModel').addClass('hidden');
                    $('#toast-error').removeClass('hidden');
                    $('#toast-error #toast-error-content').text('Internal server error, please try again later');
                },
                complete: function () {
                    $('#createAnswers').prop('disabled', false).html('Save Answer');
                }
            })
        }




        $('#closeEditAnswersModal').on('click', function () {
            $('#newEditAnswersModel').addClass('hidden');
        })

    })

</script>
<?php $this->endSection() ?>