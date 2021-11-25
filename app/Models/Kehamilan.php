<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehamilan extends Model
{
    use HasFactory;

    protected $table = 'kehamilan';
    //protected $guarded = ['id'];
    protected $fillable = [
        'kehamilan_anak_ke',
        'tanggal_awal_kehamilan',
        'nik_ibu',
        'tanggal_melahirkan',
    ];
}
