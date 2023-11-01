<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCabang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cabang', function (Blueprint $table) {
            $table->id();
            $table->text('id_vendor');
            $table->foreignId('id_unit_kerja')->references('id_unit_kerja')->on('tbl_master_unit_kerja');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('alamat')->nullable();
            $table->string('link_gmaps')->nullable();
            $table->integer('id_provinsi')->references('id')->on('tbl_master_provinsi');
            $table->integer('id_kab_kota')->references('id')->on('tbl_master_kab_kota');
            $table->integer('id_kecamatan')->references('id')->on('tbl_master_kecamatan');
            $table->integer('id_kelurahan')->references('id')->on('tbl_master_kelurahan');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_cabang');
    }
}
