<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'user_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            "title"             => ['type' => 'varchar', 'constraint' => 30, 'null' => true], // "Mr", "Mrs", "Miss", "Dr","Ms",
            'fname'             => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'lname'             => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'email'             => ['type' => 'varchar', 'constraint' => 255, 'unique' => true],
            'role_uuid'              => ['type' => 'varchar', 'constraint' => 255],
            'password'          => ['type' => 'varchar', 'constraint' => 255],
            'profile'    => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'updated_at'        => ['type' => 'datetime'],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('user_uuid');
        $this->forge->addForeignKey('role_uuid', 'roles', 'role_uuid', 'CASCADE', 'CASCADE');
        $this->forge->createTable('users', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('users');
        $this->db->enableForeignKeyChecks();
    }
}
