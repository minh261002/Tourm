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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destination_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('desc')->nullable();
            $table->string('image')->nullable();
            $table->text('gallery')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->integer('price');
            $table->integer('sale_price')->nullable();
            $table->string('address');
            $table->text('tags')->nullable();
            $table->decimal('area', 10, 2);
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('adults');
            $table->integer('children');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};