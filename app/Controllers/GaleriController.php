<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GaleriModel;
use CodeIgniter\HTTP\ResponseInterface;

class GaleriController extends BaseController
{
    protected $galeriModel;

    public function __construct()
    {
        $this->galeriModel = new GaleriModel();
    }

    public function index()
    {
        $data = [
            'galeri' => $this->galeriModel->findAll()
        ];

        return view('galeri/index', $data);
    }

    public function add()
    {
        return view('galeri/tambah');
    }

    public function save() {}
}
