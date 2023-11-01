<?php

namespace Database\Seeders;

use App\Models\Master\Provinsi;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            ['nama' => 'DKI Jakarta'],
            ['nama' => 'Banten'],
            ['nama' => 'Jawa Barat'],
            ['nama' => 'Sumatera Utara'],
            ['nama' => 'Nanggroe Aceh Darussalam (NAD)'],
            ['nama' => 'Sumatera Barat'],
            ['nama' => 'Kepulauan Riau'],
            ['nama' => 'Riau'],
            ['nama' => 'Sumatera Selatan'],
            ['nama' => 'Bangka Belitung'],
            ['nama' => 'Lampung'],
            ['nama' => 'Jambi'],
            ['nama' => 'Bengkulu'],
            ['nama' => 'Jawa Tengah'],
            ['nama' => 'DI Yogyakarta'],
            ['nama' => 'Jawa Timur'],
            ['nama' => 'Kalimantan Selatan'],
            ['nama' => 'Kalimantan Tengah'],
            ['nama' => 'Kalimantan Timur'],
            ['nama' => 'Kalimantan Utara'],
            ['nama' => 'Kalimantan Barat'],
            ['nama' => 'Bali'],
            ['nama' => 'Nusa Tenggara Barat (NTB)'],
            ['nama' => 'Nusa Tenggara Timur (NTT)'],
            ['nama' => 'Sulawesi Selatan'],
            ['nama' => 'Sulawesi Barat'],
            ['nama' => 'Sulawesi Tenggara'],
            ['nama' => 'Sulawesi Tengah'],
            ['nama' => 'Sulawesi Utara'],
            ['nama' => 'Gorontalo'],
            ['nama' => 'Maluku'],
            ['nama' => 'Maluku Utara'],
            ['nama' => 'Papua'],
            ['nama' => 'Papua Barat'],
        ];

        collect($collections)->each(function ($data) {
            Provinsi::create($data);
        });
    }
}
