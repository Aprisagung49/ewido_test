<?php

use App\Models\ProductGroup;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ProductGroup::class);
            $table->string('slug')->unique();
            $table->string('type');
            $table->string('cable_type');
            $table->string('size');
            $table->string('rated_voltage');
            $table->string('rating_voltage')->nullable();
            $table->string('colour');
            $table->string('application');
            $table->string('product_standard');
            $table->boolean('rohs')->default(false);
            $table->string('heat_resistance');
            $table->string('test');
            $table->text('description');
            $table->string('data_sheet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
