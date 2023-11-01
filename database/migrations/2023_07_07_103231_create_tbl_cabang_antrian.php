<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCabangAntrian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cabang_antrian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jabatan');
            $table->foreignId('id_cabang');
            $table->integer('sisa_antrian')->default(0);
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('id_jabatan')->references('id')->on('tbl_master_jabatan');
            // $table->foreign('id_cabang')->references('id')->on('tbl_cabang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_cabang_antrian');
    }
}
