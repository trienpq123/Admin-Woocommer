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
        Schema::table('menu', function (Blueprint $table) {
         
            $table->string('title',255)->nullable(false);
            $table->string('url',255)->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->string('icon',255)->nullable();
            $table->string('class',255)->nullable();
            $table->string('target',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('menu', function (Blueprint $table) {
        //     //
        // });
        Schema::drop('menu');
    }
};
