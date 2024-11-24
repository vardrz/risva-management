<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyPaket extends Migration
{
    public function up()
    {
        $fields = [
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true
            ],
        ];
        $this->forge->addColumn('paket', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('paket', 'image');
    }
}
