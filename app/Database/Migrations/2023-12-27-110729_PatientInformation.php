<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PatientInformation extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'additional_info_id' => ['type' => 'varchar', 'constraint' => 255],
            'patient_uuid'      => ['type' => 'varchar', 'constraint' =>255],
            'title' => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'address' => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'nationality' => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'occupation' => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'marital_status' => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'education' => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'national_identity' => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        ]);

        $this->forge->addPrimaryKey('additional_info_id');
        $this->forge->addForeignKey('patient_uuid', 'patients', 'patient_uuid', 'CASCADE', 'CASCADE');
        $this->forge->createTable('patient_additional_info', true);
        $this->db->enableForeignKeyChecks();

    }

    public function down()
    {

        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('patient_additional_info', true);
        $this->db->enableForeignKeyChecks();
    }
}
