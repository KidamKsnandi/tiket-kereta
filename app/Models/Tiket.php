<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = "tikets";

    public function booking() {
        $this->hasMany('App\Models\Booking', 'id_tiket');
    }

    public function pembeli() {
        return $this->belongsTo('App\Models\Pembeli', 'id_pembeli');
    }

    public function kereta() {
        return $this->belongsTo('App\Models\Kereta', 'id_kereta');
    }
}
