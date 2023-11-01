<?php

namespace Database\Seeders;

use App\Models\Jasa;
use Illuminate\Database\Seeder;

class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['kode_vendor'=>'TLKM', 'nama_vendor'=> 'Telkom'],
            ['kode_vendor'=>'ARTH', 'nama_vendor'=> 'Artatech'],
        ];

        Jasa::insert($data);
    }
}
