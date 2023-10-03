<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RolePermission extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'role_permission_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'role_uuid'              => ['type' => 'varchar', 'constraint' => 255],
            'permission_uuid'              => ['type' => 'varchar', 'constraint' => 255],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('permission_uuid');
        $this->forge->addForeignKey('role_uuid', 'roles', 'role_uuid', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('permission_uuid', 'permissions', 'permission_uuid', 'CASCADE', 'CASCADE');
        $this->forge->createTable('role_permission', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('role_permission');
        $this->db->enableForeignKeyChecks();
    }
}
