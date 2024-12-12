<?php

//namespace dan import model dari galeri dll
namespace App\Controllers;

use App\Models\GaleriModel;
use App\Models\ItemPaketModel;
use App\Models\PaketModel;
use App\Models\ProfileModel;
use App\Models\TestiModel;

//controller halaman depan(home)
class Home extends BaseController
{
    protected $profileModel;
    protected $testiModel;
    protected $paketModel;
    protected $galeriModel;
    protected $itemPaketModel;
    
    //menginisiasi semua model yang dibutuhkan
    public function __construct()
    {
        $this->profileModel = new ProfileModel();
        $this->testiModel = new TestiModel();
        $this->galeriModel = new GaleriModel();
        $this->paketModel = new PaketModel();
        $this->itemPaketModel = new ItemPaketModel();
    }
    
    //mengatur data halaman utama
    public function index()
    {
        //data yang diambil
        $profil = $this->profileModel->get()[0];
        $testi = $this->testiModel->get();
        $galeriFoto = $this->galeriModel->where('type', 'foto')->findAll();
        $galeriVideo = $this->galeriModel->where('type', 'video')->findAll();
        $paket = $this->paketModel->findAll();
        $item = $this->itemPaketModel->findAll();
        
        //mengembalikan ke halaman home
        return view('home', [
            "profil" => $profil,
            "testi" => $testi,
            "paket" => $paket,
            "item" => $item,
            "galeriFoto" => $galeriFoto,
            "galeriVideo" => $galeriVideo,
        ]);
    }

    //menampilkan detail halaman paket 
    public function paket($id){

        //data yang diambil (profil, paket, itempaket)
        $profil = $this->profileModel->get()[0];
        $paket = $this->paketModel->getById($id)[0];
        $item = $this->itemPaketModel->getByIdPaket($paket['id_paket']);
        
        //mengembalikan ke halaman paket
        return view('paket', [
            "profil" => $profil,
            "paket" => $paket,
            "item" => $item,
        ]);
    }
    
    //menampilkan detail halaman galeri
    public function galeri($id){

        //data yang diambil (profil, galeri)
        $profil = $this->profileModel->get()[0];
        $galeri = $this->galeriModel->find($id);
        
        //kembali ke halaman galeri
        return view('galeri', [
            "profil" => $profil,
            "galeri" => $galeri,
        ]);
    }
    
    //menampilkan detail halaman testimoni
    public function testimoni($id){

        //data yang diambil (profile, testimoni)
        $profil = $this->profileModel->get()[0];
        $testi = $this->testiModel->getById($id)[0];
        
        //kembali ke halaman testimoni
        return view('testimoni', [
            "profil" => $profil,
            "testi" => $testi
        ]);
    }
}
