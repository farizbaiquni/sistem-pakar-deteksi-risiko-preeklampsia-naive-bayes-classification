<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variabel extends Model
{
    use HasFactory;

    protected $table = 'variabel';
    //protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'nama',
        'id_gejala',
    ];
}
