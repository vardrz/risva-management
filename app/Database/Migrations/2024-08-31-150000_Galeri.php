<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galeri extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_galeri'          => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'judul'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 100
            ],
            'deskripsi'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 2000
            ],
            'foto'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ]
        ]);

        $this->forge->addKey('id_galeri', true);
        $this->forge->createTable('galeri');
    }

    public function down()
    {
        $this->forge->dropTable('galeri');
    }
}
