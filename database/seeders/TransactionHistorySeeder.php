<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TransactionHistory;

class TransactionHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        ['transaction_status_id'=>'1','transaction_id'=> '1','updated_by'=> '48980521',],
        ['transaction_status_id'=>'2','transaction_id'=> '2','updated_by'=> '46960322',],
        ];
        TransactionHistory::insert($data);
    }
}
