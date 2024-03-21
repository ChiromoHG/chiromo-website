<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AssessmentQuestions extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'assessment_question_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'assessment_category_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'assessment_question'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'assessment_question_description'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'updated_at'        => ['type' => 'datetime'],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('assessment_question_uuid');
        $this->forge->addForeignKey('assessment_category_uuid','assessment_category','assessment_category_uuid','CASCADE','CASCADE');
        $this->forge->createTable('assessment_questions', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('assessment_questions');
        $this->db->enableForeignKeyChecks();
    }
}
