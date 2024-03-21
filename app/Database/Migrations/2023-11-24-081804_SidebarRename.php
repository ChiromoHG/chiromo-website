<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SidebarRename extends Migration
{
    public function up()
    {
        $this->forge->renameTable('navbar', 'sidebar');
    }

    public function down()
    {
       $this->forge->renameTable('sidebar', 'navbar');
    }
}
