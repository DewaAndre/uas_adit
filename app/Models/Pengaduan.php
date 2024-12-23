<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan'; // Nama tabel

    protected $primaryKey = 'id_pengaduan'; // Primary Key

    public $timestamps = true; // Menggunakan timestamps

    // Kolom yang dapat diisi
    protected $fillable = [
        'deskripsi',
    ];
}
