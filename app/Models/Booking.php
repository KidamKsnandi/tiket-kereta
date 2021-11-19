<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = "booking";

    protected $visible = ['id_tiket','tgl_berangkat','tgl_pemesanan'];
    protected $fillable = ['id_tiket','tgl_berangkat','tgl_pemesanan'];
    public $timestamps = true;

    public function tiket() {
        return $this->belongsTo('App\Models\Tiket', 'id_tiket');
    }

    public function kasir() {
        return $this->hasMany('App\Models\Kasir', 'id_booking');
    }
}
