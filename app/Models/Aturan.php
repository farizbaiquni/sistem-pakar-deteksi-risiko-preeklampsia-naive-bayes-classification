<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    use HasFactory;

    protected $table = 'aturan';
    //protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'nama',
        'id_kelas',
    ];
}
