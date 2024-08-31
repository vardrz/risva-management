<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profil extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'logo'              => [
                'type'              => 'VARCHAR',
                'constraint'        => 200
            ],
            'slogan'            => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'deskripsi'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 2000
            ],
            'youtube_video'         => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'instagram'             => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'whatsapp'              => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'alamat'                => [
                'type'              => 'VARCHAR',
                'constraint'        => 500
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('profil');
    }

    public function down()
    {
        $this->forge->dropTable('profil');
    }
}
