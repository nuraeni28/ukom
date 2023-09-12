<?php

namespace App\Http\Controllers;

use App\Models\InformasiKegiatan;
use App\Models\JadwalKegiatan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
    {
      
        $datas = InformasiKegiatan::all();
        return view('home.pages.index')->with(compact('datas'));
    }
   public function tentang()
    {
        
        return view('home.pages.tentang');
    }
   public function video()
    {
        return view('home.pages.video');
    }
   public function informasi()
    {
         $datas = InformasiKegiatan::all();
        return view('home.pages.informasi')->with(compact('datas'));
    }
   public function jadwal()
    {
         $datas = JadwalKegiatan::all();
        return view('home.pages.jadwal')->with(compact('datas'));
    }
}
