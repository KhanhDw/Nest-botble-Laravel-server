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
        // 2025_01_01_001600_create_orders_table.php
Schema::create('orders', function (Blueprint $table) {
    $table->id();
    $table->string('code')->unique();
    $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
    $table->foreignId('shipping_address_id')->constrained('addresses')->cascadeOnDelete();
    $table->decimal('sub_total', 15, 2);
    $table->decimal('shipping_fee', 15, 2)->default(0);
    $table->decimal('discount_amount', 15, 2)->default(0);
    $table->decimal('grand_total', 15, 2);
    $table->string('payment_method');
    $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending');
    $table->string('shipping_method');
    $table->enum('shipping_status', ['pending', 'processing', 'shipping', 'delivered', 'canceled'])->default('pending');
    $table->text('note')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
