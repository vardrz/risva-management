<?php

//namespace dan import model dari galeri dll
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GaleriModel;
use CodeIgniter\HTTP\ResponseInterface;

//controller halaman galeri
class GaleriController extends BaseController
{
    protected $galeriModel;

    //menginisialisasi model galeri 
    public function __construct()
    {
        $this->galeriModel = new GaleriModel();
    }

    //menampilkan semua data galeri
    public function index()
    {
        $data = [
            'galeri' => $this->galeriModel->findAll()
        ];

        //mengirim data ke view
        return view('galeri/index', $data);
    }

    //menampilkan formulir untuk menambahkan
    public function add()
    {
        return view('galeri/tambah');
    }

    public function addVideo()
    {
        return view('galeri/tambah-video');
    }


    //metode save data galeri
    public function save()
    {
        // Validasi input
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

        // Upload gambar
        $gambar = $this->request->getFile('gambar');
        $namaGambar = $gambar->getRandomName();
        $gambar->move('img', $namaGambar);

        // Simpan ke database
        $this->galeriModel->save([
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/admin/galeri');
    }

    //metode save video dengan metode embed link
    public function saveVideo()
    {
        // Validasi input
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
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Link short harus diisi.'
                ]
            ],
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/galeri/add-video')->withInput();
        }

        //// Simpan video sebagai link
        $this->galeriModel->save([
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => str_replace("shorts", "embed", $this->request->getPost('link')),
            'type' => "video"
        ]);

        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/admin/galeri');
    }

    //edit galeri
    public function edit($id)
    {
        $data = [
            'value' => $this->galeriModel->find($id)
        ];

        if($data['value']['type'] == "foto"){
            return view('galeri/edit', $data);
        }else{
            return view('galeri/edit-video', $data);
        }

    }

    //metode update foto dan video
    public function update($id)
    {
        // Validasi input
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

        // Ganti gambar jika diunggah ulang
        $gambar = $this->request->getFile('gambar');
        if ($gambar->getError() == 4) {
            $namaGambar = $this->request->getPost('gambarLama');
        } else {
            $namaGambar = $gambar->getRandomName();
            unlink('img/' . $this->request->getPost('gambarLama'));
            $gambar->move('img', $namaGambar);
        }

        // Update data
        $this->galeriModel->save([
            'id_galeri' => $id,
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin/galeri');
    }

    // update video
    public function updateVideo($id)
    {
        //validasi data
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
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Link short harus diisi.'
                ]
            ],
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/galeri/edit/' . $id)->withInput();
        }

        // Ganti video jika diunggah ulang
        $this->galeriModel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => str_replace("shorts", "embed", $this->request->getPost('link')),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin/galeri');
    }

    //hapus data termasuk file foto & galeri
    public function delete($id)
    {
        $galeri = $this->galeriModel->find($id);
        if ($galeri['type'] == 'foto') {
            unlink('img/' . $galeri['foto']);
        }

        $this->galeriModel->delete($id);

        session()->setFlashdata('hapus', 'Data berhasil dihapus.');
        return redirect()->to('/admin/galeri');
    }
}
