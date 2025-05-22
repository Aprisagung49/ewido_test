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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelamar_id');
            $table->string('nama_perusahaan');
            $table->string('jabatan');
            $table->string('jenis_pekerjaan');
            $table->string('tanggal_mulai',4);
            $table->string('tanggal_selesai',4)->nullable(); // boleh nullable kalau masih bekerja
            $table->string('gaji_terakhir');
            $table->timestamps();
        
            $table->foreign('pelamar_id')->references('id')->on('pelamars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
