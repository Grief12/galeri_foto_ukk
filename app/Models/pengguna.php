<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $table = 'penggunas';
    protected $guarded = [
        'id',
        'created_at'];
    
    public function gambars(){
        return $this->hasMany(gambar::class,'userId','id');
    }
    
    public function komentars(){
        return $this->hasMany(Komentar::class,'userId','id');
    }
}
