<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table            = 'paket';
    protected $primaryKey       = 'id_paket';
    protected $allowedFields    = ['nama_paket', 'deskripsi', 'harga', 'image'];

    public function AmbilItem()
    {
        $builder = $this->db->table('paket');
        $builder->select('paket.id_paket, paket.nama_paket, paket.deskripsi, paket.harga, paket.image, item_paket.item, item_paket.id_item');
        $builder->join('item_paket', 'item_paket.id_paket = paket.id_paket');
        return $builder->get()->getResultArray();
    }

    public function getById($id)
    {
        $builder = $this->db->table('paket');
        $builder->select('*')->where('id_paket', $id);
        return $builder->get()->getResultArray();
    }

    // protected $useAutoIncrement = true;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;

    // protected bool $allowEmptyInserts = false;
    // protected bool $updateOnlyChanged = true;

    // protected array $casts = [];
    // protected array $castHandlers = [];

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
