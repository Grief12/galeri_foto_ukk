<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use App\Models\foto;
use App\Models\pengguna;
use App\Models\album;
use App\Http\Controllers\SessionnnController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function homeView(Request $req){
        $uid = Session::get('id');
        $s1 = new SessionnnController;
        if($s1->sessionCheck() == false){
            return redirect()->intended('/login');
        } else {
            return view('home',['foto'=>foto::orderBy(DB::raw('RAND()'))->get()]);
        }
    }

    public function indexView(Request $req){
        return view('/index',['foto'=>foto::orderBy(DB::raw('RAND()'))->get()]);
    }
    
}
