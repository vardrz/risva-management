<?php

namespace App\Controllers;

use App\Models\GaleriModel;
use App\Models\ItemPaketModel;
use App\Models\PaketModel;
use App\Models\ProfileModel;
use App\Models\TestiModel;

class Home extends BaseController
{
    protected $profileModel;
    protected $testiModel;
    protected $paketModel;
    protected $galeriModel;
    protected $itemPaketModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
        $this->testiModel = new TestiModel();
        $this->galeriModel = new GaleriModel();
        $this->paketModel = new PaketModel();
        $this->itemPaketModel = new ItemPaketModel();
    }

    public function index()
    {
        $profil = $this->profileModel->get()[0];
        $testi = $this->testiModel->get();
        $galeriFoto = $this->galeriModel->where('type', 'foto')->findAll();
        $galeriVideo = $this->galeriModel->where('type', 'video')->findAll();
        $paket = $this->paketModel->findAll();
        $item = $this->itemPaketModel->findAll();

        return view('home', [
            "profil" => $profil,
            "testi" => $testi,
            "paket" => $paket,
            "item" => $item,
            "galeriFoto" => $galeriFoto,
            "galeriVideo" => $galeriVideo,
        ]);
    }

    public function paket($id){
        $profil = $this->profileModel->get()[0];
        $paket = $this->paketModel->getById($id)[0];
        $item = $this->itemPaketModel->getByIdPaket($paket['id_paket']);
        
        return view('paket', [
            "profil" => $profil,
            "paket" => $paket,
            "item" => $item,
        ]);
    }

    public function galeri($id){
        $profil = $this->profileModel->get()[0];
        $galeri = $this->galeriModel->find($id);

        return view('galeri', [
            "profil" => $profil,
            "galeri" => $galeri,
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
