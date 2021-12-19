<?php

namespace App\Http\Controllers;

// use App\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home () {
        return view('beranda');
    }

    public function info_kegiatan () {
        return view('info');
    }

    public function data_siswa () {
        return view('siswa');
    }
}
