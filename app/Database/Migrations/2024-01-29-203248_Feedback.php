<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Feedback extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'feedback_uuid'   => ['type' => 'varchar', 'constraint' =>255],
            'feedback_user_choice'   => ['type' => 'int', 'constraint' =>11],
            'feedback_user_name'   => ['type' => 'varchar', 'constraint' =>255],
            'feedback_user_email'   => ['type' => 'varchar', 'constraint' =>255],
            'feedback_user_phone'   => ['type' => 'varchar', 'constraint' =>255],
            'feedback_user_message'   => ['type' => 'varchar', 'constraint' =>255],
            'updated_at'        => ['type' => 'datetime'],
            'created_at'        => ['type' => 'datetime', 'default' => date('Y-m-d H:i:s'), 'null' => true],
        ]);

        $this->forge->addPrimaryKey('feedback_uuid');
        $this->forge->createTable('feedback', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('feedback');
        $this->db->enableForeignKeyChecks();
    }
}
