<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = "pembeli";

    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['nama_pembeli','alamat','no_telp','id_kelas'];
    // memberikan akses data apa saja yang bisa diisi
    protected $fillable = ['nama_pembeli','alamat','no_telp','id_kelas'];
    // mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    public function kelas() {
        // data dari model "Book" bisa dimiliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Kelas', 'id_kelas');
    }

    public function tiket() {
        // data dari model "Book" bisa dimiliki oleh model "Author"
        // melalui fk "author_id"
        return $this->hasMany('App\Models\Tiket', 'id_pembeli');
    }
}
