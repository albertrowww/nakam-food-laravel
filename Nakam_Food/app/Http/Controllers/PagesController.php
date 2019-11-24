<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Selamat Datang di NakamFood';
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'About NakamFood';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services NakamFood',
            'services' => ['Order Makanan', 'Riwayat', 'Kotak Masuk']
        );
        return view('pages.services')->with($data);
    }
}
