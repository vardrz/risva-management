<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestiModel;
use CodeIgniter\HTTP\ResponseInterface;

class TestiController extends BaseController
{
    protected $testiModel;

    public function __construct()
    {
        $this->testiModel = new TestiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Testimoni',
            'data' => $this->testiModel->get(),
        ];

        return view('testi/index', $data);
    }

    public function add()
    {
        return view('testi/add', [
            "title" => "Tambah Testimoni"
        ]);
    }

    public function save()
    {
        if (!$this->validate([
            'pesan' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => 'Pesan harus diisi.',
                ]
            ],
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => 'Nama harus diisi.',
                ]
            ],
            'image' => [
                'rules'  => 'uploaded[image]|max_size[image, 2042]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    "uploaded" => "Gambar harus diupload",
                    "max_size" => "Ukuran file max 2 MB",
                    "mime_in" => "Hanya gambar dengan format jpg, jpeg, png yang diizinkan",
                ]
            ],
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/testi')->withInput();
        }

        $imageFile = $this->request->getFile('image');
        $imageFileName = null;
        if ($imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageFileName = 'testi_' . $imageFile->getRandomName();
            $imageFile->move(FCPATH  . 'uploaded/testimoni', $imageFileName);
        }

        $this->testiModel->insert([
            'nama'      => $this->request->getPost('nama'),
            'pesan'     => $this->request->getPost('pesan'),
            'image'     => $imageFileName
        ]);

        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/admin/testi');
    }

    public function edit($id)
    {
        $data = $this->testiModel->getById($id)[0];
        return view('testi/edit', [
            "title" => "Tambah Testimoni",
            "data" => $data
        ]);
    }

    public function update($id)
    {
        $rules = [
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => 'Nama harus diisi.',
                ]
            ],
            'pesan' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => 'Pesan harus diisi.',
                ]
            ],
            'image' => [
                'rules'  => 'uploaded[image]|max_size[image, 2042]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    "uploaded" => "Gambar harus diupload",
                    "max_size" => "Ukuran file max 2 MB",
                    "mime_in" => "Hanya gambar dengan format jpg, jpeg, png yang diizinkan",
                ]
            ]
        ];

        if(empty($_FILES['image']['name'])){
            if (!$this->validate([
                'nama' => $rules['nama'],
                'pesan' => $rules['pesan'],
            ])) {
                session()->setFlashdata('validator', $this->validator->getErrors());
                return redirect()->to('/admin/testi')->withInput();
            }
        }else{
            if (!$this->validate($rules)) {
                session()->setFlashdata('validator', $this->validator->getErrors());
                return redirect()->to('/admin/testi')->withInput();
            }
        }

        $data = [];
        if(empty($_FILES['image']['name'])){
            $data = [
                'nama'  => $this->request->getPost('nama'),
                'pesan' => $this->request->getPost('pesan'),
            ];

            $this->testiModel->update($id, $data);
        }else{
            // hapus gambar lama
            unlink(FCPATH . 'uploaded/testimoni/' . $this->request->getPost('oldImage'));
            // upload gambar baru
            $imageFile = $this->request->getFile('image');
            $imageFileName = null;
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                $imageFileName = 'testi_' . $imageFile->getRandomName();
                $imageFile->move(FCPATH  . 'uploaded/testimoni', $imageFileName);
            }

            $data = [
                'nama'  => $this->request->getPost('nama'),
                'pesan' => $this->request->getPost('pesan'),
                'image' => $imageFileName
            ];

            $this->testiModel->update($id, $data);
        }

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin/testi');
    }

    public function delete($id)
    {
        $image = $this->testiModel->getById($id)[0]['image'];
        unlink(FCPATH . 'uploaded/testimoni/' . $image);
        
        $this->testiModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/testi');
    }
}