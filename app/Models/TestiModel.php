<?php

namespace App\Models;

use CodeIgniter\Model;

class TestiModel extends Model
{
    protected $table            = 'testimoni';
    protected $primaryKey       = 'id_testi';
    protected $allowedFields    = ['nama', 'pesan', 'image'];

    public function get()
    {
        $builder = $this->db->table('testimoni');
        $builder->select('*');
        return $builder->get()->getResultArray();
    }

    public function getById($id)
    {
        $builder = $this->db->table('testimoni');
        $builder->where('id_testi', $id)->select('*');
        return $builder->get()->getResultArray();
    }
}