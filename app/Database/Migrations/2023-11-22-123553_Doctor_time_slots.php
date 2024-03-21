<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Doctor_time_slots extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'slot_uuid' => ['type' => 'varchar', 'constraint' =>255],
            'user_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'slot_start_date' => ['type' => 'date'],
            'slot_end_date' => ['type' => 'date'],
            'slot_start_time' => ['type' => 'time'],
            'slot_end_time' => ['type' => 'time'],
            'created_at' => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('slot_uuid');
        $this->forge->addForeignKey('user_uuid', 'users', 'user_uuid', 'CASCADE', 'CASCADE');
        $this->forge->createTable('doctor_time_slot');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('doctor_time_slot');
        $this->db->enableForeignKeyChecks();
    }
}
