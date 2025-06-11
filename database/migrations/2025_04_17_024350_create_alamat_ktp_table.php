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
        Schema::create('alamat_ktp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applicant_id')->unique();
            $table->string('alamat1');
            $table->string('kota1');
            $table->string('kecamatan1');
            $table->string('kelurahan1');
            $table->string('provinsi1');
            $table->timestamps();
            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_ktp');
    }
};
