<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TransactionType;

class TransactionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TransactionType::factory()->count(5)->create();
           $data = [
        // Teller
           ['type'=>'Teller', 'service'=> 'Setor Tunai'],
           ['type'=>'Teller', 'service'=> 'Tarik Tunai'],
           ['type'=>'Teller', 'service'=> 'Setoran Deposito'],
           ['type'=>'Teller', 'service'=> 'Pencairan Deposito'],
           ['type'=>'Teller', 'service'=> 'Pindah Buku'],
           ['type'=>'Teller', 'service'=> 'Kliring'],
           ['type'=>'Teller', 'service'=> 'Kirim Uang / SKN'],
           ['type'=>'Teller', 'service'=> 'RTGS'],
           ['type'=>'Teller', 'service'=> 'Pembayaran Pajak'],
           ['type'=>'Teller', 'service'=> 'Pembayaran Lainnya'],
           ['type'=>'Teller', 'service'=> 'Remittance'],
           ['type'=>'Teller', 'service'=> 'Jual/Beli Valas'],
           ['type'=>'Teller', 'service'=> 'Lainnya'],
        //  Customer Service
           ['type'=>'Customer Service', 'service'=> 'Pembukaan Rekening (Tabungan)'],
           ['type'=>'Customer Service', 'service'=> 'Pembukaan Rekening (Deposito)'],
           ['type'=>'Customer Service', 'service'=> 'Pembukaan Rekening (Giro)'],
           ['type'=>'Customer Service', 'service'=> 'Rekening Program'],
           ['type'=>'Customer Service', 'service'=> 'Pengkinian Data'],
           ['type'=>'Customer Service', 'service'=> 'Permohonan kartu ATM'],
           ['type'=>'Customer Service', 'service'=> 'Pembuatan Pin ATM'],
           ['type'=>'Customer Service', 'service'=> 'Pencairan Deposito'],
           ['type'=>'Customer Service', 'service'=> 'Informasi Saldo'],
           ['type'=>'Customer Service', 'service'=> 'Pencairan Cek/BG'],
           ['type'=>'Customer Service', 'service'=> 'Aktivasi Cek/BG'],
           ['type'=>'Customer Service', 'service'=> 'Cetak Rekening Koran'],
           ['type'=>'Customer Service', 'service'=> 'Cetak Buku Tabungan'],
           ['type'=>'Customer Service', 'service'=> 'Ganti Buku Tabungan'],
           ['type'=>'Customer Service', 'service'=> 'Buka Blokir'],
           ['type'=>'Customer Service', 'service'=> 'Tutup Rekening'],
           ['type'=>'Customer Service', 'service'=> 'Remittance'],
           ['type'=>'Customer Service', 'service'=> 'SKB/SKDKB'],
           ['type'=>'Customer Service', 'service'=> 'Pengaduan Nasabah'],
           ['type'=>'Customer Service', 'service'=> 'JakOne Mobile'],
           ['type'=>'Customer Service', 'service'=> 'SMS Notification'],
           ['type'=>'Customer Service', 'service'=> 'KJP'],
           ['type'=>'Customer Service', 'service'=> 'KPJ'],
           ['type'=>'Customer Service', 'service'=> 'PNS'],
           ['type'=>'Customer Service', 'service'=> 'Umum'],
           ['type'=>'Customer Service', 'service'=> 'Lainnya'],
           ];
        TransactionType::insert($data);
    }
}
