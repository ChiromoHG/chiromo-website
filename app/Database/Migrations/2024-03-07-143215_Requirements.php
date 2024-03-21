<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Requirements extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'requirement_uuid' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'job_uuid' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'requirement' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('requirement_uuid', true);
        $this->forge->addForeignKey('job_uuid', 'jobs', 'job_uuid', 'CASCADE', 'CASCADE');
        $this->forge->createTable('job_requirements');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('job_requirements');
        $this->db->enableForeignKeyChecks();
    }
}
