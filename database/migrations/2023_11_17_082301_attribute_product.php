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
        Schema::create('attribute_product', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_attr')->constrained();
            $table->foreignId('id_product')->constrained();
            $table->string('value'); // Giá trị thuộc tính: S - M L
            $table->string('code'); // Mã sản phẩm
            $table->string('barcode'); // BARCODE sản phẩm
            $table->string('price'); // Giá sản phẩm
            $table->string('images'); // Hình ảnh
            $table->integer('stock','int'); // Số Lượng
            $table->integer('weight','int'); // Số Lượng
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_product');
    }
};
