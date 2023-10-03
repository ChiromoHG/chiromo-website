<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Permissions extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'permission_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'permission_name'              => ['type' => 'varchar', 'constraint' => 255],
            'permission_description'       => ['type' => 'varchar', 'constraint' => 255],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('permission_uuid');
        $this->forge->createTable('permissions', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('permissions');
        $this->db->enableForeignKeyChecks();
    }
}
