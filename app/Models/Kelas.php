<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $visible = ['nama_kelas','harga'];
    protected $fillable = ['nama_kelas','harga'];
    public $timestamps = true;

    public function pembeli() {
        $this->hasMany('App\Models\Pembeli', 'id_kelas');
    }
}
