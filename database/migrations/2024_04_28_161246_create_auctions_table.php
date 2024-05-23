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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->decimal('started_bid', 8, 2);
            $table->decimal('highest_bid', 8, 2)->nullable();
            $table->string('brand');
            $table->date('since');
            $table->string('country');
            $table->string('owned');
            $table->string('image');
            $table->date('date_of_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auctions');
    }
};
