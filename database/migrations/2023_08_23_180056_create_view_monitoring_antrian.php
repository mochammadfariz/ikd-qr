<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateViewMonitoringAntrian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("drop view if exists v_monitoring_antrian");
        DB::statement("create or replace view v_monitoring_antrian AS
                        select
                        tc.id as id_cabang,
                        tc.link_gmaps as link_lokasi,
                        uk.id_unit_kerja, uk.nama as nama_unit_kerja,
                        jb.id as id_jabatan,
                        jb.jabatan as nama_jabatan,
                        tc.alamat ,
                        mp.nama as provinsi ,
                        mkk.nama as kab_kota ,
                        mkc.nama as kecamatan ,
                        mkl.nama as kelurahan ,
                        tc.latitude , tc.longitude ,
                        tr1.total as jumlah_reservasi,
                        tr2.total as jumlah_sedang_mengantri,
                        tr3.total as jumlah_sedang_dilayani,
                        tr4.total as jumlah_hold,
                        tr5.total as jumlah_selesai,
                        tr6.total as jumlah_kadaluarsa
                        from tbl_cabang tc
                        left join tbl_cabang_has_jabatans cj on tc.id = cj.id_cabang
                        left join tbl_master_jabatan jb on cj.id_jabatan = jb.id
                        left join tbl_master_provinsi mp on mp.id = tc.id_provinsi
                        left join tbl_master_kab_kota mkk on mkk.id = tc.id_kab_kota
                        left join tbl_master_kecamatan mkc on mkc.id = tc.id_kecamatan
                        left join tbl_master_kelurahan mkl on mkl.id = tc.id_kelurahan
                        inner join tbl_master_unit_kerja uk on uk.id_unit_kerja = tc.id_unit_kerja
                        left join (select jb.id as id_jabatan, jb.jabatan, tt.id_cabang, count(tt.id) total from tbl_master_jabatan jb left join tbl_transactions tt on tt.id_jabatan = jb.id and tt.id_status = 1 group by tt.id_cabang, jb.jabatan, jb.id) tr1 on tr1.id_cabang = tc.id and tr1.id_jabatan = jb.id
                        left join (select jb.id as id_jabatan, jb.jabatan, tt.id_cabang, count(tt.id) total from tbl_master_jabatan jb left join tbl_transactions tt on tt.id_jabatan = jb.id and tt.id_status = 2 group by tt.id_cabang, jb.jabatan, jb.id) tr2 on tr2.id_cabang = tc.id and tr2.id_jabatan = jb.id
                        left join (select jb.id as id_jabatan, jb.jabatan, tt.id_cabang, count(tt.id) total from tbl_master_jabatan jb left join tbl_transactions tt on tt.id_jabatan = jb.id and tt.id_status = 3 group by tt.id_cabang, jb.jabatan, jb.id) tr3 on tr3.id_cabang = tc.id and tr3.id_jabatan = jb.id
                        left join (select jb.id as id_jabatan, jb.jabatan, tt.id_cabang, count(tt.id) total from tbl_master_jabatan jb left join tbl_transactions tt on tt.id_jabatan = jb.id and tt.id_status = 4 group by tt.id_cabang, jb.jabatan, jb.id) tr4 on tr4.id_cabang = tc.id and tr4.id_jabatan = jb.id
                        left join (select jb.id as id_jabatan, jb.jabatan, tt.id_cabang, count(tt.id) total from tbl_master_jabatan jb left join tbl_transactions tt on tt.id_jabatan = jb.id and tt.id_status = 5 group by tt.id_cabang, jb.jabatan, jb.id) tr5 on tr5.id_cabang = tc.id and tr5.id_jabatan = jb.id
                        left join (select jb.id as id_jabatan, jb.jabatan, tt.id_cabang, count(tt.id) total from tbl_master_jabatan jb left join tbl_transactions tt on tt.id_jabatan = jb.id and tt.id_status = 6 group by tt.id_cabang, jb.jabatan, jb.id) tr6 on tr6.id_cabang = tc.id and tr6.id_jabatan = jb.id
                        order by tc.id, jb.id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("drop view if exists v_monitoring_antrian");
    }
}
