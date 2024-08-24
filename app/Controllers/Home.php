<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
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
        return view('testimoni', [
            "id" => $id
        ]);
    }
}
