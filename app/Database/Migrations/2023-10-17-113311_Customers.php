<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customers extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'patient_uuid'      => ['type' => 'varchar', 'constraint' =>255],
            'uhid'              => ['type' => 'varchar', 'constraint' => 255, 'unique' => true],
            'encounter_number'  => ['type' => 'varchar', 'constraint' => 255, 'unique' => true],
            'fname'             => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'lname'             => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'gender'            => ['type' => 'varchar', 'constraint' => 10, 'null' => true],
            'dob'               => ['type' => 'date', 'null' => true],
            'residence'         => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'phone'             => ['type' => 'varchar', 'constraint' => 13],
            'email'             => ['type' => 'varchar', 'constraint' => 255, 'unique' => true],
            'password'          => ['type' => 'varchar', 'constraint' => 255],
            'profile'           => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'updated_at'        => ['type' => 'datetime'],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d')],
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
