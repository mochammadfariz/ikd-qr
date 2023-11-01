<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jabatan;
use App\Models\Location;
use App\Models\Vendor;
use App\Models\MasterWaktuLayanan;
use App\Models\TransactionStatus;
use App\Models\TransactionHistory;
use App\Models\CabangAntrian;
use App\Models\Layanan;
use App\Models\User;
use App\Models\Role;
use App\Models\Master\UnitKerja;
use App\Models\Master\Divisi;
use App\Models\Master\Departemen;
use App\Models\CabangViewLokal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        // TransactionSeeder::class,
        JabatanSeeder::class,
        MasterWaktuLayananSeeder::class,
        UnitKerjaSeeder::class,
        ProvinsiSeeder::class,
        KabupatenKotaSeeder::class,
        KecamatanSeeder::class,
        KelurahanSeeder::class,
        CabangSeeder::class,
        JasaSeeder::class,
        TransactionStatusSeeder::class,
        TransactionHistorySeeder::class,
        CabangAntrianSeeder::class,
        LayananSeeder::class,
        CabangHasJabatanSeeder::class,
        // CMS Template
        DivisiSeeder::class,
        DepartemenSeeder::class,
        //UserSeeder::class,
        //RoleSeeder::class,
        JamSeeder::class,
        TransactionSeeder::class,
        CabangViewSeeder::class
    ]);
    }
}
