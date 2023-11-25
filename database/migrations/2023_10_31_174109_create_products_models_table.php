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
        Schema::create('products_models', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('category_id');
            $table->string('brand_id');
            $table->string('product_name');
            $table->string('description');
            $table->string('product_image');
            $table->string('unit_id');
            $table->string('selling_price');
            $table->string('buying_price');
            $table->string('sku');
            $table->string('product_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_models');
    }
};
