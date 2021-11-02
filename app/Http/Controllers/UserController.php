<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('biodata', [
            "title" => "Biodata",
            "user" => User::with('biodata')->find(1)
        ]);
    }
}
