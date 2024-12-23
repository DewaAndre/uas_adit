<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengaduan;

class PengaduanSeeder extends Seeder
{
    public function run(): void
    {
        Pengaduan::create([
            'deskripsi' => 'Pengaduan terkait fasilitas umum yang rusak.',
        ]);

        Pengaduan::create([
            'deskripsi' => 'Pengaduan mengenai pelayanan administrasi yang lambat.',
        ]);
    }
}
