<?php

namespace App\Controllers;
use App\Models\ProfileModel;
use App\Models\TestiModel;

class Home extends BaseController
{
    protected $profileModel;
    protected $testiModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
        $this->testiModel = new TestiModel();
    }

    public function index()
    {
        $profil = $this->profileModel->get()[0];
        $testi = $this->testiModel->get();

        return view('home', [
            "profil" => $profil,
            "testi" => $testi,
        ]);
    }

    public function paket($id){
        return view('paket', [
            "id" => $id
        ]);
    }

    public function galeri($id){
        return view('galeri', [
            "id" => $id
        ]);
    }

    public function testimoni($id){
        $profil = $this->profileModel->get()[0];
        $testi = $this->testiModel->getById($id)[0];
        
        return view('testimoni', [
            "profil" => $profil,
            "testi" => $testi
        ]);
    }
}
