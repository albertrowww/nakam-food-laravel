<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public $table = 'pelanggan';
    public $timestamps = false;
    protected $fillable = ["telepon_pelangaan","nama_depan","nama_tengah","nama_belakang","surel"];
}
