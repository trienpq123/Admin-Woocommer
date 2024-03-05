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
        Schema::table('product_promotion', function (Blueprint $table) {
            $table->unsignedBigInteger('promotion_id')->nullable();
            $table->unsignedBigInteger('id_product')->nullable();
            $table->foreign('promotion_id')->references('id')->on('promotion')->onDelete('cascade');
            $table->id();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_promotion', function (Blueprint $table) {
           
        });
    }
};
