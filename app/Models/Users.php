<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'email',
        'password',
    ];

    // Sembunyikan atribut dari array JSON
    protected $hidden = [
        'password',
    ];
}
