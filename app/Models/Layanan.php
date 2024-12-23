<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan'; 

    protected $primaryKey = 'id_layanan'; 

    public $timestamps = true; 

    protected $fillable = [
        'nama',
        'jenis_layanan',
        'tanggal',
    ];
}
