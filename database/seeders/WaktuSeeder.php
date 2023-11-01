<?php

namespace Database\Seeders;

use App\Models\Waktu;
use Illuminate\Database\Seeder;

class WaktuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'id_jabatan' => '1',
            'waktu_mulai' => '08:00:00',
            'waktu_selesai' => '14:00:00'
            ],

            [
            'id_jabatan' => '2',
            'waktu_mulai' => '08:00:00',
            'waktu_selesai' => '14:00:00'
            ],
        ];

        Waktu::insert($data);
    }
}
