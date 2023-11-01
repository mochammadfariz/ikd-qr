<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CabangAntrian;

class CabangAntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $data = [
        ['id_jabatan'=>'1', 'id_cabang'=> '1','sisa_antrian'=> '10'],
        ['id_jabatan'=>'2', 'id_cabang'=> '1','sisa_antrian'=> '12'],
        ['id_jabatan'=>'1', 'id_cabang'=> '2','sisa_antrian'=> '6'],
        ['id_jabatan'=>'2', 'id_cabang'=> '2','sisa_antrian'=> '7'],
        ['id_jabatan'=>'1', 'id_cabang'=> '3','sisa_antrian'=> '12'],
        ['id_jabatan'=>'2', 'id_cabang'=> '3','sisa_antrian'=> '9'],
        ['id_jabatan'=>'1', 'id_cabang'=> '4','sisa_antrian'=> '6'],
        ['id_jabatan'=>'2', 'id_cabang'=> '4','sisa_antrian'=> '10'],
        ];
        CabangAntrian::insert($data);
}
}
