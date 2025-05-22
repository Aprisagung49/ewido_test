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
        Schema::create('alamat_domisili', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelamar_id')->unique();
            $table->string('alamat0');
            $table->string('kota0');
            $table->string('kecamatan0');
            $table->string('kelurahan0');
            $table->string('provinsi0');
            $table->boolean('is_domisili_sama')->default(1); // 1 = sama, 0 = beda
            $table->timestamps();
            $table->foreign('pelamar_id')->references('id')->on('pelamars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_domisili');
    }
};
