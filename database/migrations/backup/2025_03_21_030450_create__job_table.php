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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_name');
            $table->string('slug');
            $table->foreignId('departement_id')->constrained(
                table: 'departements', indexName: 'jobs_departement_id'
            );
            $table->string('job_type');
            $table->integer('quota');
            $table->string('job_location');
            $table->string('status_education');
            $table->string('age');
            $table->string('ipk');
            // $table->text('job_deskripsi');
            $table->boolean('job_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_job');
    }
};
