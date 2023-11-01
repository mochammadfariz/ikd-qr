<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_master_layanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jabatan');
            $table->string('kode_layanan')->unique();
            $table->string('nama_layanan');
            $table->string('src')->nullable()->default('image.svg');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_master_layanan');
    }
};
