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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->date('sale_date');
            $table->string('reference');	
            $table->integer('customer_id');	
            $table->string('customer_name');	
            $table->date('tax_percentage');	
            $table->integer('tax_amount');	
            $table->integer('discount_percentage');	
            $table->integer('discount_amount');	
            $table->integer('shipping_amount');	
            $table->integer('total_amount');	
            $table->integer('paid_amount');	
            $table->integer('due_amount');	
            $table->string('status');	
            $table->string('payment_status');	
            $table->string('payment_method');	
            $table->string('note');	
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
