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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id');
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_barcode_symbology');
            $table->integer('product_quantity');
            $table->integer('product_cost');
            $table->integer('product_price');
            $table->string('product_unit');
            $table->integer('product_stock_alert');
            $table->integer('product_tax_type');
            $table->text('product_note');
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
