<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('kegiatans', [
            "title" => "Kegiatan",
            "kegiatans" => Kegiatan::all()
        ]);
    }
    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatan', [
            "title" => "Kegiatan",
            "kegiatan" => $kegiatan,
            "presensis" => $kegiatan->presensi
        ]);
    }
}
