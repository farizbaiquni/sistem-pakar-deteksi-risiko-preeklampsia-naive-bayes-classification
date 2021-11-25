<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;

    // Table menggunakan nama default yaitu users
    // protected $table = 'pasien';
    // protected $guarded = ['id'];
    protected $fillable = [
        'username',
        'email',
        'password',
    ];
}
