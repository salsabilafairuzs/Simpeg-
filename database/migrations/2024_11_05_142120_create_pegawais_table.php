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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('NIP');
            $table->string('nama');
            $table->string('departemen_id');
            $table->string('jabatan_id');
            $table->enum('jenis_kelamin',['Laki-laki', 'Perempuan'])->default('Laki-laki');
            $table->string('tgl_lahir');
            $table->string('email');
            $table->string('telepon');
            $table->enum('status', ['Kontrak', 'Karyawan-Tetap', 'Part-Time', 'Magang'])->default('Kontrak');
            $table->text('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
