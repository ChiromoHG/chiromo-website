<?php

namespace Modules\Admin\Models;

use CodeIgniter\Model;

class AssessmentModel extends Model
{
    public function createAssessmentCategory($assessmentData)
    {
        $builder = $this->db->table('assessment_category');
        $builder->insert($assessmentData);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return [];
        }
    }

    public function updateAssessmentCategory($assessmentCategory, $assessmentCategoryId)
    {
        $builder = $this->db->table('assessment_category');
        $builder->where('assessment_category_uuid', $assessmentCategoryId);
        $builder->update($assessmentCategory);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return [];
        }
    }

    public function getAssessmentCategory()
    {
        $builder = $this->db->table('assessment_category');
        $builder->select('*');
        $query = $builder->get();
        if ($query->getResult()) {
            return $query->getResult();
        } else {
            return [];
        }
    }

    public function getAssessmentCategoryById($assessmentCategoryId)
    {
        $builder = $this->db->table('assessment_category');
        $builder->select('*');
        $builder->where('assessment_category_uuid', $assessmentCategoryId);
        $query = $builder->get();
        if ($query->getResult()) {
            return $query->getResult();
        } else {
            return [];
        }
    }

    public function createAssessmentQuestion($assessmentQuestionData)
    {
        $builder = $this->db->table('assessment_questions');
        $builder->insert($assessmentQuestionData);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return [];
        }
    }

    public function updateAssessmentQuestion($assessmentQuestionEdit, $assessmentQuestionId)
    {
        $builder = $this->db->table('assessment_questions');
        $builder->where('assessment_question_uuid', $assessmentQuestionId);
        $builder->update($assessmentQuestionEdit);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return [];
        }
    }


    public function getAssessmentQuestions()
    {
        $builder = $this->db->table('assessment_questions');
        $builder->select('assessment_questions.*, assessment_category.assessment_category_name');
        $builder->join('assessment_category', 'assessment_category.assessment_category_uuid = assessment_questions.assessment_category_uuid');
        $builder->orderBy('assessment_category.assessment_category_name', 'ASC');
        $query = $builder->get();
        if ($query->getResult()) {
            return $query->getResult();
        } else {
            return [];
        }
    }

    public function getAssessmentQuestionsById($assessmentQuestionId)
    {
        $builder = $this->db->table('assessment_questions');
        $builder->select('assessment_questions.*, assessment_category.assessment_category_name');
        $builder->join('assessment_category', 'assessment_category.assessment_category_uuid = assessment_questions.assessment_category_uuid');
        $builder->where('assessment_questions.assessment_question_uuid', $assessmentQuestionId);
        $query = $builder->get();
        if ($query->getResult()) {
            return $query->getResultArray();
        } else {
            return [];
        }
    }

    public function getAssessmentAnswersCategory($categoryId)
    {
        $builder = $this->db->table('assessment_questions');
        $builder->select('assessment_questions.assessment_question_uuid, assessment_questions.assessment_question');
        $builder->join('assessment_category', 'assessment_category.assessment_category_uuid = assessment_questions.assessment_category_uuid');
        $builder->where('assessment_questions.assessment_category_uuid', $categoryId);
        $query = $builder->get();
        if ($query->getResult()) {
            return $query->getResultArray();
        } else {
            return [];
        }
    }

    public function updateAssessmentAnswers($assessmentAnswersEdit, $assessmentAnswersId)
    {
        $builder = $this->db->table('assessment_answers');
        $builder->where('assessment_answers_uuid', $assessmentAnswersId);
        $builder->update($assessmentAnswersEdit);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return [];
        }
    }

    public function createAssessmentAnswers($assessmentAnswersData)
    {
        $builder = $this->db->table('assessment_answers');
        $builder->insert($assessmentAnswersData);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return [];
        }
    }


    public function getAssessmentAnswers()
    {
        $builder = $this->db->table('assessment_answers');
        $builder->select('assessment_answers.assessment_answer_uuid, assessment_questions.assessment_question_uuid, assessment_questions.assessment_question, COUNT(assessment_answers.assessment_question_uuid) as count_answers, assessment_category.assessment_category_name');
        $builder->join('assessment_questions', 'assessment_questions.assessment_question_uuid = assessment_answers.assessment_question_uuid');
        $builder->join('assessment_category', 'assessment_category.assessment_category_uuid = assessment_questions.assessment_category_uuid');
        $builder->groupBy('assessment_answers.assessment_question_uuid');
        $builder->orderBy('assessment_category.assessment_category_name', 'ASC');
        $query = $builder->get();
        if ($query->getResult()) {
            return $query->getResultArray();
        } else {
            return [];
        }
    }

    public function getAssessmentAnswersWithQuesId($assessmentQuesId)
    {
        $builder = $this->db->table('assessment_answers');
        $builder->select('assessment_answers.assessment_answer_uuid, assessment_answers.assessment_answer');
        $builder->where('assessment_answers.assessment_question_uuid', $assessmentQuesId);
        $query = $builder->get();
        if ($query->getResultArray()) {
            return $query->getResultArray();
        } else {
            return [];
        }
    }

    public function updateAssessmentAnswersWithQuesId($data, $assessmentQuesId)
    {
        $builder = $this->db->table('assessment_answers');
        $builder->where('assessment_answer_uuid', $assessmentQuesId);
        $builder->update($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return [];
        }
    }


}