<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EmailTrail extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'message_trail_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'fname'                => ['type' => 'varchar', 'constraint' => 30],
            'lname'                => ['type' => 'varchar', 'constraint' => 30],
            'role_uuid'            => ['type' => 'varchar', 'constraint' => 255],
            'message'              => ['type' => 'varchar', 'constraint' => 255],
            'status'               => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'created_at'           => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('message_trail_uuid');
        $this->forge->addForeignKey('role_uuid', 'roles', 'role_uuid', 'CASCADE', 'CASCADE');
        $this->forge->createTable('email_trail', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('email_trail');
        $this->db->enableForeignKeyChecks();
    }
}
