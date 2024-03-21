<?php

namespace  Modules\Admin\Controllers;
use App\Controllers\BaseController;

use Modules\Admin\Models\AssessmentModel;
use Ramsey\Uuid\Uuid;



class Assessments extends BaseController{

    private $assessmentModel;
    public function __construct()
    {
        $this->assessmentModel = model(AssessmentModel::class);
    }
    public function assessmentGroup(){
        return view('Modules\Admin\Views\main\assessment-group');
    }

    public function assessmentQuestions(){
        $data = [];
        try{
            $getAssessmentCategory = $this->assessmentModel->getAssessmentCategory();
            $data['assessmentCategory'] = $getAssessmentCategory;
        }catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('Modules\Admin\Views\main\assessment-questions', $data);
    }

    public function assessmentAnswers()
    {

        $data = [];
        try{
            $getAssessmentCategory = $this->assessmentModel->getAssessmentCategory();
            $data['assessmentCategory'] = $getAssessmentCategory;
        }catch (\Exception $e) {
            return $this->response->setJSON($e->getMessage());
        }
        return view('Modules\Admin\Views\main\assessment-answers', $data);
    }

    public function createAssessmentCategory()
    {
        $assessmentCategoryName = $this->request->getPost('categoryName');
        $assessmentCategoryDescription = $this->request->getPost('categoryDescription');
        $assessmentCategoryId = $this->request->getPost('assessmentCategoryId');

        $assessmentCategory = [
            'assessment_category_uuid' => Uuid::uuid4()->toString(),
            'assessment_category_name' => $assessmentCategoryName,
            'assessment_category_description' => $assessmentCategoryDescription,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $assessmentCategoryEdit = [
            'assessment_category_name' => $assessmentCategoryName,
            'assessment_category_description' => $assessmentCategoryDescription,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if(!empty($assessmentCategoryId)){
            try{
                $this->assessmentModel->updateAssessmentCategory($assessmentCategoryEdit, $assessmentCategoryId);

                $response = [
                    'status' => 200,
                    'message' => 'Assessment Category Updated Successfully',
                ];
            }catch(\Exception $e){
                return $this->response->setJSON($e->getMessage());
            }

        }else{
            try{
                $this->assessmentModel->createAssessmentCategory($assessmentCategory);

                $response = [
                    'status' => 200,
                    'message' => 'Assessment Category Created Successfully',
                ];
            }catch (\Exception $e){
                return $this->response->setJSON($e->getMessage());
            }

        }
        return $this->response->setJSON($response);

    }

    public function getAssessmentCategory()
    {
        $assessmentCategory = $this->assessmentModel->getAssessmentCategory();
        if ($assessmentCategory) {
            $response = [
                'status' => 200,
                'message' => 'Assessment Category Fetched Successfully',
                'data' => $assessmentCategory,
            ];
        } else {
            $response = [
                'status' => 500,
                'message' => 'There was an error, try again',
            ];
        }
        return $this->response->setJSON($response);
    }

    public function getAssessmentCategoryById()
    {
        try{

            $assessmentCategoryId = $this->request->getVar('assessmentCategoryId');
            log_message('error', 'assessmentCategoryId: '.$assessmentCategoryId);
            $assessmentCategory = $this->assessmentModel->getAssessmentCategoryById($assessmentCategoryId);
            if ($assessmentCategory) {
                $response = [
                    'status' => 200,
                    'message' => 'Assessment Category Fetched Successfully',
                    'data' => $assessmentCategory,
                ];
            } else {
                $response = [
                    'status' => 500,
                    'message' => 'There was an error, try again',
                ];
            }
            return $this->response->setJSON($response);
        }catch(\Exception $e){
            return $this->response->setJSON($e->getMessage());
        }
    }


    public function createAssessmentQuestion(){
        $assessmentCategoryId = $this->request->getPost('assessmentCategoryId');
        $assessmentQuestion = $this->request->getPost('assessmentQuestion');
        $assessmentQuestionDescription = $this->request->getPost('assessmentQuestionDescription');
        $assessmentQuestionId = $this->request->getPost('assessmentQuestionId');

        $assessmentQuestionData = [
            'assessment_question_uuid' => Uuid::uuid4()->toString(),
            'assessment_category_uuid' => $assessmentCategoryId,
            'assessment_question' => $assessmentQuestion,
            'assessment_question_description' => $assessmentQuestionDescription,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $assessmentQuestionEdit = [
            'assessment_category_uuid' => $assessmentCategoryId,
            'assessment_question' => $assessmentQuestion,
            'assessment_question_description' => $assessmentQuestionDescription,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if(!empty($assessmentQuestionId)){
            try{
                $this->assessmentModel->updateAssessmentQuestion($assessmentQuestionEdit, $assessmentQuestionId);

                $response = [
                    'status' => 200,
                    'message' => 'Assessment Question Updated Successfully',
                ];
            }catch(\Exception $e){
                return $this->response->setJSON($e->getMessage());
            }

        }else{
            try{
                $this->assessmentModel->createAssessmentQuestion($assessmentQuestionData);

                $response = [
                    'status' => 200,
                    'message' => 'Assessment Question Created Successfully',
                ];
            }catch (\Exception $e){
                return $this->response->setJSON($e->getMessage());
            }

        }
        return $this->response->setJSON($response);
    }

    public function getAssessmentQuestions()

    {

        try{

            $assessmentQuestions = $this->assessmentModel->getAssessmentQuestions();
            if ($assessmentQuestions) {
                $response = [
                    'status' => 200,
                    'message' => 'Assessment Questions Fetched Successfully',
                    'data' => $assessmentQuestions,
                ];
            } else {
                $response = [
                    'status' => 500,
                    'message' => 'There was an error, try again',
                ];
            }
            return $this->response->setJSON($response);

        }catch (\Exception $e){
            return $this->response->setJSON($e->getMessage());
        }
    }

    public function getAssessmentQuestionsById()
    {

        $questionID = $this->request->getVar('assessmentQuestionId');

        try {

            $assessmentQuestions = $this->assessmentModel->getAssessmentQuestionsById($questionID);
            if ($assessmentQuestions) {
                $response = [
                    'status' => 200,
                    'message' => 'Assessment Questions Fetched Successfully',
                    'data' => $assessmentQuestions,
                ];
            } else {
                $response = [
                    'status' => 500,
                    'message' => 'There was an error, try again',
                ];
            }
            return $this->response->setJSON($response);
        }catch (\Exception $e){
            return $this->response->setJSON($e->getMessage());
        }
    }

    public function getAssessmentAnswersCategory()
    {
        $categoryId = $this->request->getVar('assessmentCategoryId');
        try{
            $assessmentAnswers = $this->assessmentModel->getAssessmentAnswersCategory($categoryId);
            if ($assessmentAnswers) {
                $response = [
                    'status' => 200,
                    'message' => 'Assessment Answers Fetched Successfully',
                    'data' => $assessmentAnswers,
                ];
            } else {
                $response = [
                    'status' => 500,
                    'message' => 'There was an error, try again',
                ];
            }
            return $this->response->setJSON($response);
        }catch (\Exception $e){
            return $this->response->setJSON($e->getMessage());
        }
    }


    public function createAssessmentAnswers()
    {

        $assessmentCategoryId = $this->request->getPost('assessmentCategoryId');
        $assessmentQuestionId = $this->request->getPost('assessmentQuestionId');
        $assessmentAnswers = $this->request->getPost('assessmentAnswers');
        $assessmentAnswersId = $this->request->getPost('assessmentAnswersId');

        $assessmentAnswersData = [
            'assessment_answer_uuid' => Uuid::uuid4()->toString(),
            'assessment_category_uuid' => $assessmentCategoryId,
            'assessment_question_uuid' => $assessmentQuestionId,
            'assessment_answer' => $assessmentAnswers,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $assessmentAnswersEdit = [
            'assessment_category_uuid' => $assessmentCategoryId,
            'assessment_question_uuid' => $assessmentQuestionId,
            'assessment_answer' => $assessmentAnswers,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if(!empty($assessmentAnswersId)){
            try{
                $this->assessmentModel->updateAssessmentAnswers($assessmentAnswersEdit, $assessmentAnswersId);

                $response = [
                    'status' => 200,
                    'message' => 'Assessment Answers Updated Successfully',
                ];
            }catch(\Exception $e){
                return $this->response->setJSON([
                    'status' => 500,
                    'message' => 'Something went wrong'
                ]);
            }

        }else{
            try{
                $this->assessmentModel->createAssessmentAnswers($assessmentAnswersData);

                $response = [
                    'status' => 200,
                    'message' => 'Assessment Answers Created Successfully',
                ];
            }catch (\Exception $e){
                return $this->response->setJSON($e->getMessage());
            }

        }
        return $this->response->setJSON($response);
    }

    public function getAssessmentAnswers()
    {
        try{
            $assessmentAnswers = $this->assessmentModel->getAssessmentAnswers();
            if ($assessmentAnswers) {
                $response = [
                    'status' => 200,
                    'message' => 'Assessment Answers Fetched Successfully',
                    'data' => $assessmentAnswers,
                ];
            } else {
                $response = [
                    'status' => 500,
                    'message' => 'There was an error, try again',
                ];
            }
            return $this->response->setJSON($response);
        }catch (\Exception $e){
            return $this->response->setJSON($e->getMessage());
        }
    }

    public function getAssessmentAnswersWithQuesId()
    {
        $assessmentQuesId = $this->request->getVar('assessmentQuestionId');

        try {
            $assessmentAnswers = $this->assessmentModel->getAssessmentAnswersWithQuesId($assessmentQuesId);
            if ($assessmentAnswers) {
                $response = [
                    'status' => 200,
                    'message' => 'Assessment Answers Fetched Successfully',
                    'data' => $assessmentAnswers,
                ];
            } else {
                $response = [
                    'status' => 500,
                    'message' => 'There was an error, try again',
                ];
            }
            return $this->response->setJSON($response);
        } catch (\Exception $e) {
            return $this->response->setJSON($e->getMessage());
        }

    }

    public function updateAssessmentAnswersWithQuesId()
    {
        $answerId = $this->request->getVar('answerId');
        $answer = $this->request->getVar('answerData');

        $assessmentAnswersEdit = [
            'assessment_answer' => $answer,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        try {
            $assessmentAnswers = $this->assessmentModel->updateAssessmentAnswersWithQuesId($assessmentAnswersEdit, $answerId);
            if ($assessmentAnswers) {
                $response = [
                    'status' => 200,
                    'message' => 'Assessment Answers Updated Successfully'
                ];
            } else {
                $response = [
                    'status' => 500,
                    'message' => 'There was an error, try again',
                ];
            }
            return $this->response->setJSON($response);
        } catch (\Exception $e) {
            return $this->response->setJSON($e->getMessage());
        }
    }

}