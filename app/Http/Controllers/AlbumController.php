<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\album;
use App\Models\foto;
use Illuminate\Support\Facades\File;


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
    public function uploadgambar(Request $req){
        if ($this->cekEkstensi($req)==true){
            try{
                $file=$req->file("foto");
                $file->move("album_user/".explode("!!!",$req->AlbumName)[0],$file->getClientOriginalName());
                foto::create([
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
        $foto = foto::firstwhere('id',$id);
        $foto->delete();
        unlink($foto->lokasi_file);
        return back();
    }

    public function detailAlbum(Request $req,$albumId){
        $detailfoto = foto::get()->where('albumId',$albumId);
        $album = album::firstwhere('id',$albumId);
        $nama_album = explode("@",$album['nama_album'])[0];
        return view('album',[
            'nama_album'=>$nama_album,
            'detailfoto'=>$detailfoto
        ]);
    }
    public function getAlbumInfo(Request $req){
        $id = $req->input('idAlbum');
        $album = album::firstWhere('id', $id);
        return response()->json([
            'data' => $album
        ], 200);
    }
    public function deleteAlbum(Request $req){
        $id = $req->idAlbum;
        $album = Album::firstWhere('id', $id);
        $pathAlbum = system('cd')."\\album_user\\".$album->nama_album;
        File::cleanDirectory($pathAlbum);
        rmdir($pathAlbum);
        $foto = foto::where('albumId', $id)->get();

        if($foto->count() >= 1){
            foreach($foto as $a){
                Foto::firstWhere('id', $a['id'])->delete();
            }
        }

        $album->delete();
        return back();
    }
}
