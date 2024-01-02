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
        Schema::create('product_variants_option', function (Blueprint $table) {
            $table->id('id_product_variants_option');
            $table->integer('id_product_variants');
            $table->string('name')->nullable();
            $table->integer('id_value_attr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('create', function (Blueprint $table) {
            //
        });
    }
};
