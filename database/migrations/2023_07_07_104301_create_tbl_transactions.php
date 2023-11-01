<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reference_code', 10)->nullable();
            $table->foreignId('id_jabatan')->nullable();
            $table->integer('nomor_antrian_vendor')->nullable();
            $table->string('user_cif',16)->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('email')->nullable();
            $table->double('nominal', 13, 2)->nullable();	
            $table->foreignId('id_status')->nullable();
            $table->foreignId('id_layanan')->nullable();
            $table->string('nrik_petugas')->nullable();
            $table->string('nama_petugas')->nullable();
            $table->foreignId('id_cabang')->nullable();
            $table->enum('is_online', ['yes', 'no'])->default('yes');
            $table->foreignId('id_vendor')->nullable();
            $table->date('tanggal_reservasi')->nullable();
            $table->time('jam_reservasi')->nullable();
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
        Schema::dropIfExists('tbl_transactions');
    }
}
