<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $visible = ['nama_kelas'];
    protected $fillable = ['nama_kelas'];
    public $timestamps = true;

    public function pembeli() {
        $this->hasMany('App\Models\Pembeli', 'id_kelas');
    }
}
