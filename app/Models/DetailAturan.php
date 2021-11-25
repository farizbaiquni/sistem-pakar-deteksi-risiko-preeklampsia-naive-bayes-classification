<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAturan extends Model
{
    use HasFactory;
    protected $table = 'detail_aturan';
    //protected $guarded = ['id'];
    protected $fillable = [
        'id_aturan',
        'id_variabel',
    ];
}
