<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        return view('admin/home');
    }

    public function login()
    {
        return view('admin/login');
    }

    public function auth()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email wajib diisi',
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password wajib diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('validator', $this->validator->getErrors());
            return redirect()->to('/admin/login');
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $admin = $this->adminModel->where('email', $email)->first();

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                session()->set([
                    'email' => $admin['email'],
                    'username' => $admin['username'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/admin/home');
            } else {
                session()->setFlashdata('pesan', 'Password salah');
                return redirect()->to('/admin/login');
            }
        } else {
            session()->setFlashdata('pesan', 'Email tidak terdaftar');
            return redirect()->to('/admin/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('pesan', 'Logout berhasil');
        return redirect()->to('/admin/login');
    }
}
