<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carousel extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'carousel_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'carousel_title'   => ['type' => 'varchar', 'constraint' =>255],
            'carousel_description'   => ['type' => 'varchar', 'constraint' =>255],
            'carousel_tag'   => ['type' => 'varchar', 'constraint' =>255],
            'carousel_image'   => ['type' => 'varchar', 'constraint' =>255],
            'carousel_has_button'   => ['type' => 'int', 'constraint' =>11],
            'updated_at'        => ['type' => 'datetime'],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('carousel_uuid');
        $this->forge->createTable('carousel', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('carousel');
        $this->db->enableForeignKeyChecks();
    }
}
