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
            $table->id();
            $table->foreignId('subCategory_id');
            $table->longText('cover');
            $table->longText('images');
            $table->string('title');
            $table->longText('description');
            $table->longText('productDetails');
            $table->bigInteger('from_shipping_days');
            $table->bigInteger('to_shipping_days');
            $table->integer('shippingPrice');
            $table->integer('price');
            $table->integer('quantity');


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
