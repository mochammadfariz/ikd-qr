<?php

namespace Database\Seeders;

use App\Models\CabangHasJabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabangHasJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            [
                'id_cabang'=> 1,
                'id_jabatan' => 1
            ],

            [
                'id_cabang'=> 1,
                'id_jabatan' => 2
            ],

            [
                'id_cabang'=> 2,
                'id_jabatan' => 1
            ],

            [
                'id_cabang'=> 2,
                'id_jabatan' => 2
            ],

            [
                'id_cabang'=> 3,
                'id_jabatan' => 1
            ],

            [
                'id_cabang'=> 3,
                'id_jabatan' => 2
            ],

            [
                'id_cabang'=> 4,
                'id_jabatan' => 1
            ],

            [
                'id_cabang'=> 4,
                'id_jabatan' => 2
            ],
        ];

        CabangHasJabatan::insert($collections);
    }
}
