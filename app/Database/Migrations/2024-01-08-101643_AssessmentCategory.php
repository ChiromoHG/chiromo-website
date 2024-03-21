<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AssessmentCategory extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'assessment_category_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'assessment_category_name'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'assessment_category_description'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'updated_at'        => ['type' => 'datetime'],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('assessment_category_uuid');
        $this->forge->createTable('assessment_category', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('assessment_category');
        $this->db->enableForeignKeyChecks();
    }
}
