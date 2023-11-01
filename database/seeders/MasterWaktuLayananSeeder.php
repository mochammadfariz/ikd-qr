<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\MasterWaktuLayanan;

class MasterWaktuLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Jam mulai: 09:00:00
        //  $startTime = Carbon::createFromTime(9, 0, 0); 
         // Jam akhir: 15:00:00
        //  $endTime = Carbon::createFromTime(15, 0, 0); 

        //  $jamMulai='09:00';
        //  $jamAkhir='13:00';


         $data = [
         ['id_jabatan'=>'1', 'waktu_mulai'=> Carbon::createFromFormat('H:i', '08:00'), 'waktu_selesai'=> Carbon::createFromFormat('H:i', '14:00')],
         ['id_jabatan'=>'2','waktu_mulai'=> Carbon::createFromFormat('H:i', '08:00'), 'waktu_selesai'=> Carbon::createFromFormat('H:i', '14:00')],
         ];
         MasterWaktuLayanan::insert($data);
    }
}
