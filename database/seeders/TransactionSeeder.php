<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Transaction::factory()->count(5)->create();
        $collections = [
            [
                'reference_code' => 'ABCDEF',
                'id_jabatan' => 1,
                'nomor_antrian_vendor' => 2,
                'user_cif' => 'MOC1105K01',
                'user_name' => 'Mochammad Fariz Syah Lazuardy',
                'user_phone' => '08577712345',
                'email' => 'mochammadfariz11@gmail.com',
                'nominal' => 280000000,
                'id_status' => 1,
                'id_layanan' => 1,
                'nrik_petugas' => '48960623',
                'nama_petugas' => 'Alzy Maulana Bermanto',
                'id_cabang' => 1,
                'is_online' => 'yes',
                'id_vendor' => 1,
                'tanggal_reservasi' => '2023-08-14',
                'jam_reservasi' => '14:00:00',
            ],
            [
                'reference_code' => 'A12443',
                'id_jabatan' => 1,
                'nomor_antrian_vendor' => 3,
                'user_cif' => 'ALZ0305K01',
                'user_name' => 'Alzy Maulana Bermanto',
                'user_phone' => '081123183182',
                'email' => 'alzy@gmail.com',
                'nominal' => 900000,
                'id_status' => 1,
                'id_layanan' => 2,
                'nrik_petugas' => '48950623',
                'nama_petugas' => 'Aisyah Vania',
                'id_cabang' => 2,
                'is_online' => 'yes',
                'id_vendor' => 1,
                'tanggal_reservasi' => '2023-08-14',
                'jam_reservasi' => '10:00:00',
            ],
            [
                'reference_code' => 'BAKHKS',
                'id_jabatan' => 2,
                'nomor_antrian_vendor' => 9,
                'user_cif' => 'AIS2302K01',
                'user_name' => 'Aisyah Vania',
                'user_phone' => '08521321321',
                'email' => 'ais@gmail.com',
                'nominal' => null,
                'id_status' => 1,
                'id_layanan' => 16,
                'nrik_petugas' => '48660623',
                'nama_petugas' => 'Hindro Kusumo Wahid',
                'id_cabang' => 3,
                'is_online' => 'no',
                'id_vendor' => 1,
                'tanggal_reservasi' => '2023-08-13',
                'jam_reservasi' => '09:00:00',
            ],
            [
                'reference_code' => 'AADSAD',
                'id_jabatan' => 2,
                'nomor_antrian_vendor' => 11,
                'user_cif' => 'HIN2310K01',
                'user_name' => 'Hindro Kusumo Wahid',
                'user_phone' => '08521712817',
                'email' => 'hindro@gmail.com',
                'nominal' => null,
                'id_status' => 1,
                'id_layanan' => 19,
                'nrik_petugas' => '48610623',
                'nama_petugas' => 'Nanda Amalia Susanti',
                'id_cabang' => 2,
                'is_online' => 'yes',
                'id_vendor' => 1,
                'tanggal_reservasi' => '2023-09-01',
                'jam_reservasi' => '09:30:00',
            ],
            [
                'reference_code' => 'ESC2EF',
                'id_jabatan' => 1,
                'nomor_antrian_vendor' => 7,
                'user_cif' => 'NAN1607K01',
                'user_name' => 'Nanda Amalia Susanti',
                'user_phone' => '081131263821',
                'email' => 'nanda@gmail.com',
                'nominal' => 3576000,
                'id_status' => 1,
                'id_layanan' => 2,
                'nrik_petugas' => '48660623',
                'nama_petugas' => 'Hindro Kusumo Wahid',
                'id_cabang' => 4,
                'is_online' => 'yes',
                'id_vendor' => 1,
                'tanggal_reservasi' => '2023-08-13',
                'jam_reservasi' => '09:00:00',
            ],
        ];
        $chunks = array_chunk($collections, config('app.array_chunks_limit'));
        collect($chunks)->each(function ($data) {
            Transaction::insert($data);
        });
    }
}
