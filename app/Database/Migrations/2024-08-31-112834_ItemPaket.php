<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ItemPaket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_item'          => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'item'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 100
            ],
            'id_paket'             => [
                'type'              => 'INT',
                'constraint'        => 11
            ]
        ]);

        $this->forge->addKey('id_item', true);
        $this->forge->addForeignKey('id_paket', 'paket', 'id_paket', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('item_paket');
    }

    public function down()
    {
        $this->forge->dropTable('item_paket');
    }
}
