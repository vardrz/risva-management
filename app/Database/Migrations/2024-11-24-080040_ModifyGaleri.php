<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyGaleri extends Migration
{
    public function up()
    {
        $fields = [
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => 'foto'
            ],
        ];
        $this->forge->addColumn('galeri', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('galeri', 'type');
    }
}
