<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sidebar extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'sidebar_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'sidebar_label'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'sidebar_url'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'sidebar_icon'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'sidebar_order'              => ['type' => 'int', 'constraint' => 30],
            'owner'    => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('sidebar_uuid');
        $this->forge->createTable('navbar', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('navbar');
        $this->db->enableForeignKeyChecks();
    }
}
