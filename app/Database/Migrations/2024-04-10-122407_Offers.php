<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Offers extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'offer_uuid' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'offer_title' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'offer' =>[
                'type' => 'decimal',
                'constraint' => '10, 2',
            ],
            'offer_start_date' => [
                'type' => 'datetime',
            ],
            'offer_end_date' => [
                'type' => 'datetime',
            ],

            'status' => [
                'type' => 'int',
                'constraint' => 11,
                'default' => '0',
            ],

            'created_at' => [
                'type' => 'datetime',
                'default' => date('Y-m-d H:i:s')
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('offer_uuid');
        $this->forge->createTable('offers', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('offers');
        $this->db->enableForeignKeyChecks();
    }
}
