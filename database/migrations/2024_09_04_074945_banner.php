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
        Schema::create('banners', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->text('link_img')->nullable();
            $table->integer('status')->default(0);
            $table->string('name_img')->nullable();
            $table->integer('index')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('create', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropColumn('title');
            $table->dropColumn('link_img');
            $table->dropColumn('status');
            $table->dropColumn('name_img');
            $table->dropColumn('index');
        });
    }
};
