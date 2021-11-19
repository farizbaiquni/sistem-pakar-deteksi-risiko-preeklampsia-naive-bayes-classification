<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'tanggal_pertama_kehamilan',
        'nama_suami',
    ];
}
