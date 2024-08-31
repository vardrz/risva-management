<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfileModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProfileController extends BaseController
{
    protected $profileModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Profil',
            'data' => $this->profileModel->get()[0],
        ];

        return view('profile/index', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'deskripsi' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => 'Deskripsi harus diisi.',
                ]
            ],
            'slogan' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => 'Slogan harus diisi.',
                ]
            ],
            'youtube_video' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => 'Video profil harus diisi.',
                ]
            ],
            'instagram' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => 'Instagram harus diisi.',
                ]
            ],
            'whatsapp' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => 'Whatsapp harus diisi.',
                ]
            ],
            'alamat' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => 'Alamat harus diisi.',
                ]
            ],
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/profile')->withInput();
        }

        $this->profileModel->update(1, [
            'deskripsi'     => $this->request->getPost('deskripsi'),
            'slogan'        => $this->request->getPost('slogan'),
            'youtube_video' => $this->request->getPost('youtube_video'),
            'whatsapp'      => $this->request->getPost('whatsapp'),
            'alamat'        => $this->request->getPost('alamat')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/admin/profile');
    }

    public function logo()
    {
        $rules = [
            'logo' => 'uploaded[logo]|max_size[logo, 2042]|mime_in[logo,image/jpg,image/jpeg,image/png]'
        ];

        $messages = [
            "logo" => [
                "uploaded" => "Logo harus diupload",
                "max_size" => "Ukuran file max 2 MB",
                "mime_in" => "Hanya gambar dengan format jpg, jpeg, png yang diizinkan",
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/profile')->withInput();
        }

        $logoFile = $this->request->getFile('logo');
        if ($logoFile->isValid() && !$logoFile->hasMoved()) {
            $logoFileName = "logo.png";
            $logoFile->move(FCPATH  . 'uploaded', $logoFileName, true);
        }

        session()->setFlashdata('logo', 'Logo berhasil diganti.');
        return redirect()->to('/admin/profile');
    }
}