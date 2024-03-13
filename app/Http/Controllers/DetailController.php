<?php

namespace App\Http\Controllers;

use App\Models\gambar;
use App\Models\LikeFoto;
use App\MOdels\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailController extends Controller
{
    public function detailFotoView(Request $req,$id){
        $gambar = gambar::with(['komentars','like_gambars'])->firstWhere('id',$id);
        $ceklike = false;
        foreach($gambar->like_gambars as $like){
            if ($req->session()->get('id')==$like->userId){
                $ceklike = true;
            } elseif($req->session()->get('id') == $like->userId){
                $ceklike = false;
            }
        }
        return view('detail',[
            'gambar'=> $gambar,
            'ceklike'=>$ceklike
        ]);
    }

    public function addLike(Request $req, $id){
        $isChecked = $req->input('is_checked') == "true" ? true : false;
        if($isChecked == true){
            LikeFoto::create([
                'fotoId' => $id,
                'userId' => $req->session()->get('id'),
                'likeType' => "App\Models\gambar"
            ]);
            return response()->json(['message' => "success di like, like nya $isChecked"], 200);
        } 
    }
    public function unlike(Request $req, $id){
        LikeFoto::where('userId', '=', $req->session()->get('uid'))->where('fotoId', '=', $id)->delete();
        return response()->json(['message' => "sukses dihapus"], 200);
    }
    public function addKomentar(Request $req, $id){
        Komentar::create([
            'fotoId' => $id,
            'userId' => $req->session()->get('id'),
            'komentarType' => "App\Models\gambar",
            'komentar' => $req->komentar
        ]);
        return response()->json([
            'message' => "sukses"
        ], 200);
    }
    public function download($file){
        $filename = $file->getClientOriginalName();
        $file = Storage::disk('public')->path($filename);
    }
}
