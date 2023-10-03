<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserLoginActivity extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'user_login_activity_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'user_uuid'             => ['type' => 'varchar', 'constraint' => 255],
            'login_time'             => ['type' => 'datetime'],
            'logout_time'              => ['type' => 'datetime', 'null' => true],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('user_login_activity_uuid');
        $this->forge->addForeignKey('user_uuid', 'users', 'user_uuid', 'CASCADE', 'CASCADE');
        $this->forge->createTable('user_login_activity', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('user_login_activity');
        $this->db->enableForeignKeyChecks();
    }
}
