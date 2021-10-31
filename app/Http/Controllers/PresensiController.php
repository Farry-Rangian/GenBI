<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Presensi;
use \App\Models\User;

class PresensiController extends Controller
{
    public function index()
    {
        return view('presensi', [
            "title" => "Presensi",
            "user" => User::find(1)
        ]);
    }

    public function show(User $user)
    {
        return view('presensi', [
            "title" => "Presensi",
            "user" => $user,
            "presensis" => $user->presensi
        ]);
    }
}
