<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Testimoni extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_testi'          => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'nama'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 150
            ],
            'pesan'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 1000
            ]
        ]);

        $this->forge->addKey('id_testimoni', true);
        $this->forge->createTable('testimoni');
    }

    public function down()
    {
        $this->forge->dropTable('testimoni');
    }
}
