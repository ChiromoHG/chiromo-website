<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Payments extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'callback_uuid' => [
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
            'amount' => [
                'type' => 'decimal',
                'constraint' => 10,
                'null' => true,
            ],
            'mpesaReceiptNumber' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'phoneNumber' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true,
            ],
            'transactionDate' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addPrimaryKey('callback_uuid');
        $this->forge->addForeignKey('merchantRequestID', 'appointment_payments', 'merchantRequestID', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('checkoutRequestID', 'appointment_payments', 'checkoutRequestID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('payments');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('payments');
        $this->db->enableForeignKeyChecks();
    }
}
