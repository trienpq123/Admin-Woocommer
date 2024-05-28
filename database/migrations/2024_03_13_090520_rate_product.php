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
        Schema::create('rate', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->integer('id_product');
            $table->foreign('id_product')->references('id_product')->on('product');
            $table->integer('user');
            $table->foreign('id_user')->references('id')->on('user');
            $table->integer('status')->default(0);
            $table->integer('rate')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
