<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = "booking";

    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['id_tiket','tgl_berangkat','tgl_pemesanan'];
    // memberikan akses data apa saja yang bisa diisi
    protected $fillable = ['id_tiket','tgl_berangkat','tgl_pemesanan'];
    // mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    public function tiket() {
        // data dari model "Book" bisa dimiliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Tiket', 'id_tiket');
    }
}
