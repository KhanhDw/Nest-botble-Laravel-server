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
        // 2025_01_01_000700_create_products_table.php
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('slug')->unique()->index();
    $table->string('sku')->unique()->index();
    $table->text('description')->nullable();
    $table->longText('content')->nullable();
    $table->decimal('price', 15, 2)->default(0);
    $table->decimal('promotional_price', 15, 2)->nullable();
    $table->integer('quantity')->default(0);
    $table->string('image')->nullable();
    $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
    $table->foreignId('brand_id')->nullable()->constrained()->nullOnDelete();
    $table->enum('status', ['selling', 'hidden', 'out_of_stock'])->default('hidden');
    $table->boolean('is_featured')->default(0);
    $table->timestamps();
    $table->softDeletes();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
