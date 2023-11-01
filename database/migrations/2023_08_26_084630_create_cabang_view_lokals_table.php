<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabangViewLokalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabang_view_lokals', function (Blueprint $table) {
            $table->id();
            $table->integer('id_jabatan');
            $table->integer('id_vendor');
            $table->integer('id_unit_kerja');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kab_kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('nama_unit_kerja');
            $table->string('jabatan');
            $table->integer('jumlah_sedang_mengantri');
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
        Schema::dropIfExists('cabang_view_lokals');
    }
}
