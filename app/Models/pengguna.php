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
    
    public function fotos(){
        return $this->hasMany(foto::class,'userId','id');
    }
    
    public function komentars(){
        return $this->hasMany(Komentar::class,'userId','id');
    }
}
