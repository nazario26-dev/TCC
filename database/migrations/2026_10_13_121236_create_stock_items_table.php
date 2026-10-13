<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_items', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->string('unit')->default('un');
            $table->decimal('cost', 12, 2)->nullable();
            $table->decimal('qty', 12, 3)->default(0);
            $table->decimal('min_qty', 12, 3)->default(0);
            $table->string('supplier')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_items');
    }
};
