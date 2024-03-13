<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambar extends Model
{
    protected $table = "gambars";

    protected $guarded = ['id','created_at'];
    public function pengguna(){
        return $this->belongsTo(pengguna::class,'userId');
    }
    public function komentars(){
        return $this->morphMany(Komentar::class,'komentarable','komentartype','fotoId');
    }
    public function like_gambars(){
        return $this->morphMany(LikeFoto::class,'likefotoable','liketype','fotoId');
    }
    public function gambarable(){
        return $this->morphTo();
    }
    public function albums(){
        return $this->belongsTo(album::class,'albumId');
    }
}