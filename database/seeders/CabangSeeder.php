<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cabang;


class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $data = [
            [
                'id_vendor'=>'1',
                'id_unit_kerja' => 376,
                'latitude'=>'-6.182702828977642',
                'longitude'=> '106.82820904324412',
                'alamat'=> 'Jl. Medan Merdeka Sel. No.8-9',
                'link_gmaps' => 'https://goo.gl/maps/pfBVYXofzs1w73mx5',
                'id_provinsi'=> 1,
                'id_kab_kota'=> 2,
                'id_kecamatan'=> 10,
                'id_kelurahan'=> 60,
            ],

            [
                'id_vendor'=>'1',
                'id_unit_kerja' => 644,
                'latitude'=>'-6.173486109742842',
                'longitude'=> '106.81855075619556',
                'alamat'=> 'Jl. Tanah Abang I No. 1',
                'link_gmaps' => 'https://goo.gl/maps/4QZDSfVEeEWRNuEe9',
                'id_provinsi'=> 1,
                'id_kab_kota'=> 2,
                'id_kecamatan'=> 10,
                'id_kelurahan'=> 65,
            ],

            [
                'id_vendor'=>'1',
                'id_unit_kerja' => 645,
                'latitude'=>'-6.120243333563021',
                'longitude'=> '106.89303647126832',
                'alamat'=> 'Gedung Walikota Jakarta Utara, Jl. Yos Sudarso No. 27-29',
                'link_gmaps' => 'https://goo.gl/maps/zxfKmhGSBA1tkvKf6',
                'id_provinsi'=> 1,
                'id_kab_kota'=> 5,
                'id_kecamatan'=> 42,
                'id_kelurahan'=> 256,
            ],

            [
                'id_vendor'=>'1',
                'id_unit_kerja' => 386,
                'latitude'=>'-6.248059259537323',
                'longitude'=> '106.807515424905',
                'alamat'=> 'Gd. Walikotama, Jl. Prapanca Raya No.9',
                'link_gmaps' => 'https://goo.gl/maps/qrWTjnUiZchAVAzm9',
                'id_provinsi'=> 1,
                'id_kab_kota'=> 3,
                'id_kecamatan'=> 19,
                'id_kelurahan'=> 119,
            ],

            ];
            Cabang::insert($data);
    }
}
