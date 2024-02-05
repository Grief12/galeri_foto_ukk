<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use App\Models\gambar;
use App\Models\Pengguna;
use App\Http\Controllers\SessionnnController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    public function homeView(Request $req){
        $s1 = new SessionnnController;
        if($s1->sessionCheck() == false){
            return redirect()->intended('/login');
        } else {
            return view('home');
        }
    }

    public function indexView(Request $req){
        return view('/index');
    }
    // public function masuk(Request $req){
    //     $pengguna =  pengguna::get();
    //     return view('login',['pengguna' => $pengguna]);
    // }

    // public function daftar(Request $req){
    //     $pengguna = pengguna::get();
    //     return view('register',['pengguna' => $pengguna]);
    // }
}
