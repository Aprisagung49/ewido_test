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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
             $table->foreignId('job_id')->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('nohp');
            $table->string('email')->unique();
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->unsignedTinyInteger('umur')->nullable();
            $table->string('status_menikah');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->enum('agama', ['Islam', 'Kristen', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Konguchu'])->default('Islam');
            $table->string('is_ada_pengalaman')->nullable();
            $table->boolean('is_read')->default(false);
            $table->boolean('is_print')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
