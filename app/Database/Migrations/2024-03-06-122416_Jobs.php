<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jobs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'job_uuid' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'job_title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'job_description' => [
                'type' => 'TEXT',
            ],
            'job_type' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'job_location' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'job_category' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'job_image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'application_link' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'job_disclaimer' => [
                'type' => 'TEXT'
            ],
            'job_closing_date' => [
                'type' => 'DATETIME',
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
        $this->forge->addKey('job_uuid', true);
        $this->forge->createTable('jobs');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('jobs');
        $this->db->enableForeignKeyChecks();
    }
}
