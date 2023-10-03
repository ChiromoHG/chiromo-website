<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sidebar extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'navbar_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'navbar_name'             => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'navbar_url'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'navbar_icon'             => ['type' => 'varchar', 'constraint' => 255, 'unique' => true],
            'navbar_order'              => ['type' => 'varchar', 'constraint' => 30],
            'owner'    => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('navbar_uuid');
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
