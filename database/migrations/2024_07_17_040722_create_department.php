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
        Schema::table('create', function (Blueprint $table) {
            $table->string('department')->after('name');
            $table->string('position')->after('department');
            $table->string('email')->after('position');
            $table->string('phone')->after('email');
            $table->string('address')->after('phone');
            $table->string('avatar')->after('address');
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
