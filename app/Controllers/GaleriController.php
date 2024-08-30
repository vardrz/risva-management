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

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[galeri.judul]',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah digunakan.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
            ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]',
                'errors' => [
                    'uploaded' => 'Gambar harus diisi.',
                    'max_size' => 'Ukuran gambar maksimal 1MB.',
                    'is_image' => 'File yang diupload harus berupa gambar.'
                ]
            ]
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/galeri/add')->withInput();
        }

        $gambar = $this->request->getFile('gambar');
        $namaGambar = $gambar->getRandomName();
        $gambar->move('img', $namaGambar);

        $this->galeriModel->save([
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/admin/galeri');
    }

    public function edit($id)
    {
        $data = [
            'value' => $this->galeriModel->find($id)
        ];

        return view('galeri/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[galeri.judul,id_galeri,' . $id . ']',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah digunakan.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]',
                'errors' => [
                    'max_size' => 'Ukuran gambar maksimal 1MB.',
                    'is_image' => 'File yang diupload harus berupa gambar.'
                ]
            ]
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/galeri/edit/' . $id)->withInput();
        }

        $gambar = $this->request->getFile('gambar');
        if ($gambar->getError() == 4) {
            $namaGambar = $this->request->getPost('gambarLama');
        } else {
            $namaGambar = $gambar->getRandomName();
            unlink('img/' . $this->request->getPost('gambarLama'));
            $gambar->move('img', $namaGambar);
        }

        $this->galeriModel->save([
            'id_galeri' => $id,
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin/galeri');
    }

    public function delete($id)
    {
        $galeri = $this->galeriModel->find($id);
        unlink('img/' . $galeri['foto']);
        $this->galeriModel->delete($id);

        session()->setFlashdata('hapus', 'Data berhasil dihapus.');
        return redirect()->to('/admin/galeri');
    }
}
