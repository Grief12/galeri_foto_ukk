<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    protected $table = "fotos";

    protected $guarded = ['id','created_at'];
    public function pengguna(){
        return $this->belongsTo(pengguna::class,'userId');
    }
    public function komentars(){
        return $this->morphMany(Komentar::class,'komentarable','komentartype','fotoId');
    }
    public function like_fotos(){
        return $this->morphMany(LikeFoto::class,'likefotoable','liketype','fotoId');
    }
    public function fotoable(){
        return $this->morphTo();
    }
    public function albums(){
        return $this->belongsTo(album::class,'albumId');
    }
}