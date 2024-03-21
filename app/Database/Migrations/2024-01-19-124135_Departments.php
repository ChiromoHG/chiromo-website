<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Departments extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'department_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'department_name'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'department_description'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'updated_at'        => ['type' => 'datetime'],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('department_uuid');
        $this->forge->createTable('departments', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('departments');
        $this->db->enableForeignKeyChecks();
    }
}
