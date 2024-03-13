<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\album;
use App\Models\gambar;

class AlbumController extends Controller
{
    private $ekstensi = ['jpg','jpeg','png'];
    public function makeAlbum(Request $req){
        try{
            mkdir("album_user/".$req->album_name."@".$req->session()->get('username'));
            album::create([
                'nama_album' => $req->album_name."@".$req->session()->get('username'),
                'userid' => $req->session()->get('id'),
            ]);
            return back();
        } catch(Exception $e) {
              return redirect()->back()->with([
                  'status_code' => 401,
                  'message' => 'album sudah ada'
              ]);
        }
    }
    public function cekEkstensi(Request $req){
        $res=false;
        for($a=0; $a < count($this->ekstensi);$a++){
            if ($this->ekstensi[$a]==$req->file("foto")->getClientOriginalExtension()){
                $res = true;
                return $res;
            }
        }
        return $res;
    }
    public function uploadGambar(Request $req){
        if ($this->cekEkstensi($req)==true){
            try{
                $file=$req->file("foto");
                $file->move("album_user/".explode("!!!",$req->AlbumName)[0],$file->getClientOriginalName());
                gambar::create([
                    'lokasi_file'=>"album_user/".explode("!!!",$req->AlbumName)[0]."/".$req->file("foto")->getClientOriginalName(),
                    'deskripsi'=>$req->deskripsi,
                    'userId'=>$req->session()->get('id'),
                    'albumId'=>explode("!!!",$req->AlbumName)[1]
                ]);
                return redirect()->back()->with([
                    'status'=>200
                ]);
            } catch (Exception $e){
                echo $e->getMessage();
            }
        } else {
            return redirect()->back()->with([
                'status'=>403
            ]);
        }
    }

    public function hapusFoto(Request $req,$id){
        $foto = gambar::firstwhere('id',$id);
        $foto->delete();
        unlink($foto->lokasi_file);
        return back();
    }

    public function detailAlbum(Request $req,$albumId){
        $detailfoto = gambar::get()->where('albumId',$albumId);
        $album = album::firstwhere('id',$albumId);
        $nama_album = explode("@",$album['nama_album'])[0];
        return view('album',[
            'nama_album'=>$nama_album,
            'detailfoto'=>$detailfoto
        ]);
    }
}
