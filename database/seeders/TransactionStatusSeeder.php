<?php

namespace Database\Seeders;

use App\Models\TransactionStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionStatusSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['status' => 'Reserved'],
            ['status' => 'Sedang Mengantri'],
            ['status' => 'Sedang Dilayani'],
            ['status' => 'Hold'],
            ['status' => 'Selesai'],
            ['status' => 'Kadaluarsa'],
        ]; 
        TransactionStatus::insert($data);
    }
}
