<?php

namespace App\Database\Seeds;

use App\Models\ProfileModel;
use CodeIgniter\Database\Seeder;

class ProfilSeeder extends Seeder
{
    public function run()
    {
        $user = new ProfileModel();

        $insertdata['logo'] = 'logo.png';
        $insertdata['slogan'] = 'We Serve, We Plan, We Organize';
        $insertdata['deskripsi'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
        $insertdata['youtube_video'] = 'https://youtu.be/WSRE5EntzZI?si=iSbh_qkXFWu1ytQh';
        $insertdata['instagram'] = '@risva_management';
        $insertdata['whatsapp'] = '+628150021000';
        $insertdata['alamat'] = 'Jl. Letjend S Parman Gg. Sawunggalih, RT.005/RW.04, Kebanyon, Kasepuhan, Kec. Batang, Kabupaten Batang, Jawa Tengah 51214, Indonesia';

        $user->insert($insertdata);
    }
}
