<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $table = "kasir";

    protected $visible = ['id_booking','nama_kasir', 'jumlah', 'total_harga','uang','kembalian'];
    protected $fillable = ['id_booking','nama_kasir','jumlah', 'total_harga','uang','kembalian'];
    public $timestamps = true;

    public function booking() {
        return $this->belongsTo('App\Models\Booking', 'id_booking');
    }
}
