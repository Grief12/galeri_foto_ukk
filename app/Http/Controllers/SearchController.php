<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foto;
use App\Models\pengguna;
use App\Models\album;
use App\Http\Controllers\SessionnnController;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function searchView(Request $req){
        $uid = Session::get('id');
        $s1 = new SessionnnController;
        if($s1->sessionCheck() == false){
            return redirect()->intended('/login');
        } else {
            $album = album::get()->where('userid',$uid);
            return view('search',['album'=>$album,'foto'=>foto::get()]);
        }
    }
}
