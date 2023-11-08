<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customers extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'patient_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'fname'             => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'lname'             => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'phone'             => ['type' => 'varchar', 'constraint' => 13],
            'email'             => ['type' => 'varchar', 'constraint' => 255, 'unique' => true],
            'password'          => ['type' => 'varchar', 'constraint' => 255],
            'profile'    => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'updated_at'        => ['type' => 'datetime'],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s')],
        ]);

        $this->forge->addPrimaryKey('patient_uuid');
        $this->forge->createTable('patients', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('patients', true);
        $this->db->enableForeignKeyChecks();
    }
}
