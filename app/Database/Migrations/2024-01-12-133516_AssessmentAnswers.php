<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AssessmentAnswers extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'assessment_answer_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'assessment_category_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'assessment_question_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'assessment_answer'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'updated_at'        => ['type' => 'datetime'],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('assessment_answer_uuid');
        $this->forge->addForeignKey('assessment_category_uuid','assessment_category','assessment_category_uuid','CASCADE','CASCADE');
        $this->forge->addForeignKey('assessment_question_uuid','assessment_questions','assessment_question_uuid','CASCADE','CASCADE');
        $this->forge->createTable('assessment_answers', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('assessment_answers');
        $this->db->enableForeignKeyChecks();
    }
}
