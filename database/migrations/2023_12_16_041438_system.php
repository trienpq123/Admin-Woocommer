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
        Schema::create('system', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name_site');
            $table->string('facebook');
            $table->string('zalo');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('email');
            $table->string('hotline');
            $table->string('logo');
            $table->string('favicon');
            $table->string('meta_keyword');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('footer');
            $table->string('google_analytics');
            $table->string('google_tag_manager');
            $table->string('google_adsense');
            $table->string('google_map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
