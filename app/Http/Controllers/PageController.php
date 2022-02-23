<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        echo "NIM saya : 2041720236 <br>";
        echo "Nama saya : Aditya Raihan Setyoputra";
    }
    public function articles($id) {
        echo "Halaman Artikel dengan ID ".$id;
    }
}
