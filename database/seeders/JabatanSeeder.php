<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jabatan;


class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = [
       ['jabatan'=>'Teller', 'keterangan'=> 'Teller memproses transaksi'],
       ['jabatan'=>'Customer Service', 'keterangan'=> 'Customer Service memproses non transaksi'],
       ];
       Jabatan::insert($data);
    }
}
