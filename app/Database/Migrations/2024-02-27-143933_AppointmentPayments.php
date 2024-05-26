<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AppointmentPayments extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'transaction_uuid' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'service_uuid' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'doctor_type' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'appointment_time' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'appointment_date' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'appointment_description' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true,
            ],
            'first_name' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'last_name' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'dob' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true,
            ],
            'mpesa_number' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'residency' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'nationality' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'gender' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'merchantRequestID' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'checkoutRequestID' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'datetime',
                'default' => date('Y-m-d H:i:s'),
                'null' => true
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true
            ]
        ]);
        $this->forge->addPrimaryKey('transaction_uuid');
        $this->forge->addForeignKey('service_uuid', 'services', 'service_uuid', 'CASCADE', 'CASCADE');
        $this->forge->createTable('appointment_payments');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('appointment_payments');
        $this->db->enableForeignKeyChecks();

    }
}
