<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('flash_sales', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Flash Sale
            $table->dateTime('start_time'); // Waktu mulai
            $table->dateTime('end_time'); // Waktu berakhir
            $table->timestamps();
        });

        Schema::create('flash_sale_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flash_sale_id')->constrained('flash_sales')->onDelete('cascade'); // Foreign key ke flash sale
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Foreign key ke produk
            $table->decimal('discount_price', 10, 2); // Harga diskon untuk flash sale
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('flash_sale_product');
    }
};
