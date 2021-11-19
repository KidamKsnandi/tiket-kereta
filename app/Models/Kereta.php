<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    use HasFactory;
    protected $table = "kereta";

    protected $visible = ['nama_kereta','jm_berangkat','jm_tiba'];
    protected $fillable = ['nama_kereta','jm_berangkat','jm_tiba'];
    public $timestamps = true;

    public function pembeli() {
        $this->belongsToMany('App\Models\Pembeli');
    }
}
