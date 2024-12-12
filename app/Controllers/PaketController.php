<?php

//namespace dan import model 
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ItemPaketModel;
use App\Models\PaketModel;
use CodeIgniter\HTTP\ResponseInterface;

//controller halaman paket
class PaketController extends BaseController
{
    protected $paketModel;
    protected $itemPaketModel;

    public function __construct()
    {
        $this->paketModel       = new PaketModel();
        $this->itemPaketModel   = new ItemPaketModel();
    }

    //Menampilkan halaman utama dengan daftar paket.
    public function index()
    {
        $data = [
            'title'     => 'Paket',
            'paket'     => $this->paketModel->findAll(),
            'item'      => $this->itemPaketModel->findAll(),
            'relasi'    => $this->paketModel->AmbilItem()
        ];

        return view('paket/index', $data);
    }

    //metode save (Menambahkan paket baru ke database)
    public function save()
    {
        if (!$this->validate([
            'nama_paket' => [
                'rules'  => 'required|is_unique[paket.nama_paket]',
                'errors' => [
                    'required'  => 'Nama Paket harus diisi.',
                    'is_unique' => 'Nama Paket sudah ada.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga harus diisi.'
                ]
            ]
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/paket')->withInput();
        }

        $this->paketModel->insert([
            'nama_paket' => $this->request->getPost('nama_paket'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'harga'      => $this->request->getPost('harga')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/admin/paket');
    }

    //metode update
    public function update($id)
    {
        if (!$this->validate([
            'edit_nama_paket' => [
                'rules'  => 'required|is_unique[paket.nama_paket,id_paket,' . $id . ']',
                'errors' => [
                    'required'  => 'Nama Paket harus diisi.',
                    'is_unique' => 'Nama Paket sudah ada.'
                ]
            ],
            'edit_deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
            ],
            'edit_harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga harus diisi.'
                ]
            ]
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/paket')->withInput();
        }

        $this->paketModel->update($id, [
            'nama_paket' => $this->request->getPost('edit_nama_paket'),
            'deskripsi'  => $this->request->getPost('edit_deskripsi'),
            'harga'      => $this->request->getPost('edit_harga')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin/paket');
    }

    //Mengunggah dan menyimpan gambar untuk paket
    public function image()
    {
        $rules = [
            'image' => 'uploaded[image]|max_size[image, 2042]|mime_in[image,image/jpg,image/jpeg,image/png]'
        ];

        $messages = [
            "image" => [
                "uploaded" => "Gambar harus diupload",
                "max_size" => "Ukuran file max 2 MB",
                "mime_in" => "Hanya gambar dengan format jpg, jpeg, png yang diizinkan",
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            session()->setFlashdata('error', 'Gagal upload gambar, cek ulang.');
            return redirect()->to('/admin/paket');
        }

        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = "gambar-paket-" . $this->request->getPost('id_paket') . ".jpg";
            $image->move(FCPATH  . 'uploaded/paket', $imageName, true);

            $this->paketModel->update($this->request->getPost('id_paket'), [
                'image' => $imageName
            ]);
        }

        session()->setFlashdata('pesan', 'Gambar paket berhasil diganti.');
        return redirect()->to('/admin/paket');
    }

    //menghapus data
    public function delete($id)
    {
        $this->paketModel->delete($id);
        $this->itemPaketModel->where('id_paket', $id)->delete();
        session()->setFlashdata('hapus', 'Data berhasil dihapus.');
        return redirect()->to('/admin/paket');
    }
}
