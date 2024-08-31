<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_paket'          => [
                'type'              => 'INT',
                'constraint'        => 1,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'nama_paket'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 200
            ],
            'deskripsi'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 1000
            ],
            'harga'             => [
                'type'              => 'INT',
                'constraint'        => 11
            ]
        ]);

        $this->forge->addKey('id_paket', true);
        $this->forge->createTable('paket');
    }

    public function down()
    {
        $this->forge->dropTable('paket');
    }
}
