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
            $table->foreignId('departement_id')->nullable()->constrained(
                table: 'departements', indexName: 'jobs_departement_id'
            );
            $table->string('job_type')->nullable();
            $table->integer('quota')->nullable();
            $table->string('job_location')->nullable();
            $table->string('status_education')->nullable();
            $table->string('age')->nullable();
            $table->string('ipk')->nullable();
            $table->text('deskripsi')->nullable();
            $table->boolean('is_preferred_position')->nullable();
            $table->boolean('job_status')->nullable();
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
