<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Services extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([

            'service_uuid'           => ['type' => 'varchar', 'constraint' =>255],
            'department_uuid'        => ['type' => 'varchar', 'constraint' =>255],
            'service_name'           => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'service_description'    => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'service_price'          => ['type' => 'decimal', 'constraint' => 10, 'null' => true],
            'updated_at'             => ['type' => 'datetime'],
            'created_at'             => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('service_uuid');
        $this->forge->addForeignKey('department_uuid','departments','department_uuid','CASCADE','CASCADE');
        $this->forge->createTable('services', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('services');
        $this->db->enableForeignKeyChecks();
    }
}
