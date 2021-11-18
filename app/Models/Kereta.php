<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    use HasFactory;
    protected $table = "kereta";

    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['nama_kereta','jm_berangkat','jm_tiba','harga'];
    // memberikan akses data apa saja yang bisa diisi
    protected $fillable = ['nama_kereta','jm_berangkat','jm_tiba','harga'];
    // mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    public function pembeli() {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        $this->belongsToMany('App\Models\Pembeli');
    }
}
