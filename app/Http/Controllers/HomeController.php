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
class HomeController extends Controller
{
    public function homeView(Request $req){
        $uid = Session::get('id');
        $s1 = new SessionnnController;
        if($s1->sessionCheck() == false){
            return redirect()->intended('/login');
        } else {
            $album = album::get()->where('userid',$uid);
            return view('home',['album'=>$album,'gambar'=>gambar::orderBy(DB::raw('RAND()'))->get()]);
        }
    }

    public function indexView(Request $req){
        return view('/index',['gambar'=>gambar::orderBy(DB::raw('RAND()'))->get()]);
    }
    
}
