<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CanceledAppointments extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cancel_appointment_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'patient_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'doctor_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'appointment_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'appointment_reason'   => ['type' => 'varchar', 'constraint' =>255],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s')],
        ]);

        $this->forge->addPrimaryKey('cancel_appointment_uuid');
        $this->forge->addForeignKey('patient_uuid','patients','patient_uuid','CASCADE','CASCADE');
        $this->forge->addForeignKey('doctor_uuid','users','user_uuid','CASCADE','CASCADE');
        $this->forge->addForeignKey('appointment_uuid','appointments','appointment_uuid','CASCADE','CASCADE');
        $this->forge->createTable('canceled_appointments', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('canceled_appointments', true);
        $this->db->enableForeignKeyChecks();
    }
}
