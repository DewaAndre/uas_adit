<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('layanan')->insert([
            [
                'id_layanan' => 1,
                'nama' => 'Pengurusan KTP',
                'jenis_layanan' => 'Administrasi Kependudukan',
                'tanggal' => '2024-12-23',
            ],
            [
                'id_layanan' => 2,
                'nama' => 'Pembuatan Akta Kelahiran',
                'jenis_layanan' => 'Administrasi Kependudukan',
                'tanggal' => '2024-12-23',
            ],
            [
                'id_layanan' => 3,
                'nama' => 'Pengajuan Bantuan UMKM',
                'jenis_layanan' => 'Ekonomi',
                'tanggal' => '2024-12-23',
            ],
        ]);
    }
}
