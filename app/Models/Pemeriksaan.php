<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    protected $table = 'pemeriksaan';
    //protected $guarded = ['id'];
    protected $fillable = [
        'tanggal',
        'tekanan_darah_sistolik',
        'tekanan_darah_diastolik',
        'kenaikan_berat_badan',
        'edema',
        'proteinuria',
        'usia_kehamilan',
        'usia_ibu',
        'tingkat_risiko',
        'kategori_risiko',
        'nik_ibu',
    ];
}
