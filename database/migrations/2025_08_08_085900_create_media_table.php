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
        // 2025_01_01_002000_create_media_table.php
Schema::create('media', function (Blueprint $table) {
    $table->id();
    $table->string('disk');
    $table->string('path');
    $table->string('file_name');
    $table->string('mime_type');
    $table->bigInteger('size');
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
