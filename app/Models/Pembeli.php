<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = "pembeli";

    protected $visible = ['nama_pembeli','alamat','no_telp','id_kelas'];
    protected $fillable = ['nama_pembeli','alamat','no_telp','id_kelas'];
    public $timestamps = true;

    public function kelas() {
        return $this->belongsTo('App\Models\Kelas', 'id_kelas');
    }

    public function tiket() {
        return $this->hasMany('App\Models\Tiket', 'id_pembeli');
    }

}
