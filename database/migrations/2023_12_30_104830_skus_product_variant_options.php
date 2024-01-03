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
        Schema::create('skus_product_variant_options', function (Blueprint $table) {
            $table->id('id_skus_product_variant_options')->autoIncrement();
            $table->bigInteger('id_product_variants');
            $table->bigInteger('id_product_variant_options');
            $table->string('sku')->nullable();
            $table->integer('price')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('stock')->default(0);
            $table->text('image')->nullable();
            $table-> timestamps();
        });

     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skus_product_variant_options', function (Blueprint $table) {
            //
        });
    }
};
