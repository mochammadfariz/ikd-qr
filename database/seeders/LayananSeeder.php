<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id_jabatan' => '1', 'kode_layanan' => 'TL01', 'nama_layanan' => 'Setor Tunai', 'src' => 'setortunai.svg'],
            // ['id_jabatan' => '1', 'kode_layanan' => 'TL02', 'nama_layanan' => 'Tarik Tunai', 'src' => 'tariktunai.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL03', 'nama_layanan' => 'Setoran Deposito', 'src' => 'setorandeposito.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL04', 'nama_layanan' => 'Pencairan Deposito', 'src' => 'pencairandeposito.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL05', 'nama_layanan' => 'Pindah Buku', 'src' => 'pindahbuku.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL06', 'nama_layanan' => 'Kliring', 'src' => 'kliring.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL07', 'nama_layanan' => 'Kirim Uang / SKN', 'src' => 'kirimuangatauskn.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL08', 'nama_layanan' => 'RTGS', 'src' => 'rtgs.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL09', 'nama_layanan' => 'Pembayaran Pajak', 'src' => 'pembayaranpajak.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL10', 'nama_layanan' => 'Pembayaran Lainnya', 'src' => 'pembayaranlainnya.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL11', 'nama_layanan' => 'Remittance', 'src' => 'remittance.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL12', 'nama_layanan' => 'Jual / Beli Valas', 'src' => 'jualbelivalas.svg'],
            ['id_jabatan' => '1', 'kode_layanan' => 'TL13', 'nama_layanan' => 'Lainnya', 'src' => 'lainnya.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS01', 'nama_layanan' => 'Pembukaan Rekening (Tabungan)', 'src' => 'pembukaanrekeningtabungan.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS02', 'nama_layanan' => 'Pembukaan Rekening (Deposito)', 'src' => 'pembukaanrekeningdeposito.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS03', 'nama_layanan' => 'Pembukaan Rekening (Giro)', 'src' => 'pembukaanrekeninggiro.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS04', 'nama_layanan' => 'Rekening Program', 'src' => 'rekeningprogram.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS05', 'nama_layanan' => 'Pengkinian Data', 'src' => 'pengkiniandata.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS06', 'nama_layanan' => 'Permohonan Kartu ATM', 'src' => 'permohonankartuatm.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS07', 'nama_layanan' => 'Pembuatan PIN ATM', 'src' => 'pembuatanpinatm.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS08', 'nama_layanan' => 'Pencairan Deposito', 'src' => 'pencairandeposito.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS09', 'nama_layanan' => 'Informasi Saldo', 'src' => 'informasisaldo.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS10', 'nama_layanan' => 'Permohonan Cek/BG', 'src' => 'permohonancekbg.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS11', 'nama_layanan' => 'Aktivasi Cek/BG', 'src' => 'aktivasicekbg.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS12', 'nama_layanan' => 'Cetak Rekening Koran', 'src' => 'cetakrekeningkoran.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS13', 'nama_layanan' => 'Cetak Buku Tabungan', 'src' => 'cetakbukutabungan.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS14', 'nama_layanan' => 'Ganti Buku Tabungan', 'src' => 'gantibukutabungan.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS15', 'nama_layanan' => 'Buka Blokir', 'src' => 'bukablokir.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS16', 'nama_layanan' => 'Tutup Rekening', 'src' => 'tutuprekening.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS17', 'nama_layanan' => 'Remittance', 'src' => 'remittance.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS18', 'nama_layanan' => 'SKB / SKDKB', 'src' => 'skborskdkb.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS19', 'nama_layanan' => 'Pengaduan Nasabah', 'src' => 'pengaduannasabah.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS20', 'nama_layanan' => 'JakOne Mobile', 'src' => 'jakonemobile.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS21', 'nama_layanan' => 'SMS Notification', 'src' => 'smsnotification.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS22', 'nama_layanan' => 'KJP', 'src' => 'kjp.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS23', 'nama_layanan' => 'KPJ', 'src' => 'kpj.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS24', 'nama_layanan' => 'Lainnya', 'src' => 'lainnya.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS25', 'nama_layanan' => 'PNS', 'src' => 'pns.svg'],
            ['id_jabatan' => '2', 'kode_layanan' => 'CS26', 'nama_layanan' => 'Umum', 'src' => 'umum.svg'],
        ];
            Layanan::insert($data);
    }
}
