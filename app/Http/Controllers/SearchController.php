<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foto;
use App\Models\pengguna;
use App\Models\album;
use App\Http\Controllers\SessionnnController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchView(Request $req){
        $uid = Session::get('id');
        $s1 = new SessionnnController;
        if($s1->sessionCheck() == false){
            return redirect()->intended('/login');
        } else {
            return view('search',['foto'=>foto::orderBy(DB::raw('RAND()'))->get()]);
        }
    }

    public function cari(Request $req){
        $keyword = $req->get('keyword');
        $results = foto::where('deskripsi','like','%'.$keyword.'%')->get();

        return view('search',['hasil'=>$results]);
    }
}
