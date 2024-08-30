<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table            = 'profil';
    // protected $primaryKey       = 'id_paket';
    protected $allowedFields    = ['logo', 'slogan', 'deskripsi', 'youtube_video', 'instagram', 'whatsapp', 'alamat'];

    public function get()
    {
        $builder = $this->db->table('profil');
        $builder->select('*');
        return $builder->get()->getResultArray();
    }
}