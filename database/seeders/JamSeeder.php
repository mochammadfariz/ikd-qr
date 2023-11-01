<?php

namespace Database\Seeders;

use App\Models\Master\Jam;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collections = [
            ['jam_layanan' => '07:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '07:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '08:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '08:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '09:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '09:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '10:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '10:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '11:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '11:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '12:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '12:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '13:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '13:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '14:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '14:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '15:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '15:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '16:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '16:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '17:00', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '17:30', 'created_at' => now(), 'updated_at' => now()],
            ['jam_layanan' => '18:00', 'created_at' => now(), 'updated_at' => now()],
        ];

        $chunks = array_chunk($collections, config('app.array_chunks_limit'));
        collect($chunks)->each(function ($data) {
            Jam::insert($data);
        });
    }
}
