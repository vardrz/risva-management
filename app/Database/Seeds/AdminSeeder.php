<?php

namespace App\Database\Seeds;

use App\Models\AdminModel;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admin = new AdminModel();

        $insertdata['email'] = 'admin@mail.com';
        $insertdata['username'] = 'admin';
        $insertdata['password'] = password_hash('password', PASSWORD_BCRYPT);

        $admin->insert($insertdata);
    }
}
