<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ItemPaketModel;
use CodeIgniter\HTTP\ResponseInterface;

class ItemPaketController extends BaseController
{
    protected $itemPaketModel;

    public function __construct()
    {
        $this->itemPaketModel = new ItemPaketModel();
    }

    public function save()
    {
        if (!$this->validate([
            'nama_item' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Item harus diisi.'
                ]
            ],
            'id_paket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Paket harus diisi.'
                ]
            ]
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/paket')->withInput();
        }

        $this->itemPaketModel->insert([
            'item'    => $this->request->getPost('nama_item'),
            'id_paket' => $this->request->getPost('id_paket')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/admin/paket');
    }

    public function update($id)
    {
        if (!$this->validate([
            'edit_item' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Item harus diisi.'
                ]
            ],
            'edit_id_paket' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Paket harus diisi.'
                ]
            ]
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/paket')->withInput();
        }

        $this->itemPaketModel->update($this->request->getPost('edit_id_paket'), [
            'item'    => $this->request->getPost('edit_item'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/admin/paket');
    }

    public function delete($id)
    {
        $this->itemPaketModel->delete($id);
        session()->setFlashdata('hapus', 'Data berhasil dihapus.');
        return redirect()->to('/admin/paket');
    }
}
