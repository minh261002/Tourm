<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('destination_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('desc')->nullable();
            $table->string('image')->nullable();
            $table->text('gallery')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('address');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->integer('price');
            $table->integer('sale_price')->nullable();
            $table->date('date');
            $table->time('time');
            $table->text('tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};