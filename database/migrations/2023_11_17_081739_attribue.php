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
        // Schema::create('attribute', function (Blueprint $table) {
        //     $table->id('id_attr');
        //     $table->string('name');
        //     $table->string('type');
        //     $table->text('image')->nullable();
        //     $table->boolean('active');
        //     // $table->text('image')
        //     $table->timestamp('last_used_at')->nullable();
        //     $table->timestamp('expires_at')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::create('attribute', function (Blueprint $table) {
          
        //     // $table->dropColumn('type');
        //     $table->boolean('active');
        //     $table->timestamps();
        // });
    }
};
