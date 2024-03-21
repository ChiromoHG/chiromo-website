<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Appointment extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'appointment_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'appointment_title'   => ['type' => 'varchar', 'constraint' =>255],
            'patient_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'doctor_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'appointment_date'   => ['type' => 'date'],
            'appointment_time'   => ['type' => 'time'],
            'appointment_status'   => ['type' => 'varchar', 'constraint' =>255],
            'appointment_notes' => ['type' => 'text', 'null' => true, 'constraint' => 255],
            'updated_at'        => ['type' => 'datetime', 'default' => date('Y-m-d')],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d')],
        ]);

        $this->forge->addPrimaryKey('appointment_uuid');
        $this->forge->addForeignKey('patient_uuid','patients','patient_uuid','CASCADE','CASCADE');
        $this->forge->addForeignKey('doctor_uuid','users','user_uuid','CASCADE','CASCADE');
        $this->forge->createTable('appointments', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('appointments', true);
        $this->db->enableForeignKeyChecks();
    }
}
