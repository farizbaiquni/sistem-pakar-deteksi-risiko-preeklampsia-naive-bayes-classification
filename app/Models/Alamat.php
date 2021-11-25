<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $table = 'alamat';
    //protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'kelurahan_desa',
        'rt',
        'rw',
    ];
}
