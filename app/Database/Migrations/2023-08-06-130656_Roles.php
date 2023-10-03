<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
    public function up()
    {

        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'role_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'role_name'              => ['type' => 'varchar', 'constraint' => 255],
            'role_description'              => ['type' => 'varchar', 'constraint' => 255],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('role_uuid');
        $this->forge->createTable('roles', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {

        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('roles');
        $this->db->enableForeignKeyChecks();
    }
}
