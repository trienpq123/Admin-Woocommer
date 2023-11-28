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
      
            Schema::table('filter_category', function (Blueprint $table) {
                $table->unsignedBigInteger('id_filter_category')->autoIncrement();
                // $table->integer('id_attr');
                // $table->integer('id_category');
                // $table->timestamp('created_at')->useCurrent();
                // $table->timestamp('updated_at')->useCurrent();
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('filter_category', function (Blueprint $table) {
            //
        });
    }
};
