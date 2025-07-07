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
        Schema::create('newsrooms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'newsrooms_user_id'
            );
            $table->foreignId('category_id')->constrained(
                table: 'newsroom_categories', indexName: 'newsrooms_category_id'
            );
            $table->string('slug')->unique();
            $table->text('body')->nullable();
            $table->json('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsrooms');
    }
};
