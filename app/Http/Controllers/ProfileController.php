<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use App\Models\gambar;
use App\Models\Pengguna;
use App\Models\album;
use App\Http\Controllers\SessionnnController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profileView(Request $req){
        
        $s1 = new SessionnnController;
        if($s1->sessionCheck() == false){
            return redirect()->intended('/login');
        } else {
            $album = album::where('userid', Session::get('id'))->get();
            $user = pengguna::firstwhere('id',Session::get('id'));
            return view('/profile',['album'=>$album,'gambar'=>gambar::get(),'akun'=>$user]);
        }
    }
}
