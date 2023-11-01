<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CabangViewLokal;

class CabangViewSeeder extends Seeder
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
                'id_jabatan' => 1,
                'id_vendor'=>1,
                'id_unit_kerja' => 376,
                'latitude'=>'-6.182702828977642',
                'longitude'=> '106.82820904324412',
                'alamat'=> 'Jl. Medan Merdeka Sel. No.8-9',
                'provinsi'=> 'DKI Jakarta',
                'kab_kota'=> 'Kota Jakarta Pusat',
                'kecamatan'=> 'Kecamatan Gambir',
                'kelurahan'=> 'KelurahanGambir',
                'nama_unit_kerja' => 'KC Juanda',
                'jabatan' => 'Teller',
                'jumlah_sedang_mengantri'=> 1
            ],

            [
                'id_jabatan' => 1,
                'id_vendor'=>1,
                'id_unit_kerja' => 644,
                'latitude'=>'-6.173486109742842',
                'longitude'=> '106.81855075619556',
                'alamat'=> 'Jl. Tanah Abang I No. 1',
                'provinsi'=> 'DKI Jakarta',
                'kab_kota'=> 'Kota Jakarta Pusat',
                'kecamatan'=> 'Kecamatan Gambir',
                'kelurahan'=> 'Kelurahan Petojo Selatan',
                'nama_unit_kerja' => 'KC SuryoPranoto',
                'jabatan' => 'Teller',
                'jumlah_sedang_mengantri'=> 2
            ],

            [
                'id_jabatan' => 1,
                'id_vendor'=>1,
                'id_unit_kerja' => 645,
                'latitude'=>'-6.120243333563021',
                'longitude'=> '106.89303647126832',
                'alamat'=> 'Gedung Walikota Jakarta Utara, Jl. Yos Sudarso No. 27-29',
                'provinsi'=> 'DKI Jakarta',
                'kab_kota'=> 'Kota Jakarta Utara',
                'kecamatan'=> 'Tanjung Priok',
                'kelurahan'=> 'Kebon Bawang',
                'nama_unit_kerja' => 'KC Walikota JakUt',
                'jabatan' => 'Teller',
                'jumlah_sedang_mengantri'=> 4
            ],

            [
                'id_jabatan' => 1,
                'id_vendor'=> 1,
                'id_unit_kerja' => 386,
                'latitude'=>'-6.248059259537323',
                'longitude'=> '106.807515424905',
                'alamat'=> 'Gd. Walikotama, Jl. Prapanca Raya No.9',
                'provinsi'=> 'DKI Jakarta',
                'kab_kota'=> 'Kota Jakarta Selatan',
                'kecamatan'=> 'Kebayoran baru',
                'kelurahan'=> 'Petogongan',
                'nama_unit_kerja' => 'KC Walikota Jaksel',
                'jabatan' => 'Teller',
                'jumlah_sedang_mengantri'=> 6
            ],

            [
                'id_jabatan' => 2,
                'id_vendor'=>1,
                'id_unit_kerja' => 376,
                'latitude'=>'-6.182702828977642',
                'longitude'=> '106.82820904324412',
                'alamat'=> 'Jl. Medan Merdeka Sel. No.8-9',
                'provinsi'=> 'DKI Jakarta',
                'kab_kota'=> 'Kota Jakarta Pusat',
                'kecamatan'=> 'Kecamatan Gambir',
                'kelurahan'=> 'KelurahanGambir',
                'nama_unit_kerja' => 'KC Juanda',
                'jabatan' => 'Customer Service',
                'jumlah_sedang_mengantri'=> 11
            ],

            [
                'id_jabatan' => 2,
                'id_vendor'=>1,
                'id_unit_kerja' => 644,
                'latitude'=>'-6.173486109742842',
                'longitude'=> '106.81855075619556',
                'alamat'=> 'Jl. Tanah Abang I No. 1',
                'provinsi'=> 'DKI Jakarta',
                'kab_kota'=> 'Kota Jakarta Pusat',
                'kecamatan'=> 'Kecamatan Gambir',
                'kelurahan'=> 'Kelurahan Petojo Selatan',
                'nama_unit_kerja' => 'KC SuryoPranoto',
                'jabatan' => 'Customer Service',
                'jumlah_sedang_mengantri'=> 12
            ],

            [
                'id_jabatan' => 2,
                'id_vendor'=>1,
                'id_unit_kerja' => 645,
                'latitude'=>'-6.120243333563021',
                'longitude'=> '106.89303647126832',
                'alamat'=> 'Gedung Walikota Jakarta Utara, Jl. Yos Sudarso No. 27-29',
                'provinsi'=> 'DKI Jakarta',
                'kab_kota'=> 'Kota Jakarta Utara',
                'kecamatan'=> 'Tanjung Priok',
                'kelurahan'=> 'Kebon Bawang',
                'nama_unit_kerja' => 'KC Walikota JakUt',
                'jabatan' => 'Customer Service',
                'jumlah_sedang_mengantri'=> 14
            ],

            [
                'id_jabatan' => 2,
                'id_vendor'=> 1,
                'id_unit_kerja' => 386,
                'latitude'=>'-6.248059259537323',
                'longitude'=> '106.807515424905',
                'alamat'=> 'Gd. Walikotama, Jl. Prapanca Raya No.9',
                'provinsi'=> 'DKI Jakarta',
                'kab_kota'=> 'Kota Jakarta Selatan',
                'kecamatan'=> 'Kebayoran baru',
                'kelurahan'=> 'Petogongan',
                'nama_unit_kerja' => 'KC Walikota Jaksel',
                'jabatan' => 'Customer Service',
                'jumlah_sedang_mengantri'=> 16
            ],

            ];
            CabangViewLokal::insert($data);
    }
}
