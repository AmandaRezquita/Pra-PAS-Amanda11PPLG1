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
        Schema::create('smk', function (Blueprint $table) {
            $table->id();
            $table->string('Sekolah');
            $table->string('Alamat');
            $table->string('Kepala_Sekolah');
            $table->integer('Jumlah_Siswa');
            $table->date('Tanggal_Pendirian');
            $table->string('Akreditasi'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smk');
    }
};
