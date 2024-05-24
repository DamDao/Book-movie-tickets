<?php

use App\Models\Food;
use App\Models\FoodOrder;
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
        Schema::create('food_order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FoodOrder::class)->constrained();
            $table->foreignIdFor(Food::class)->constrained();
            $table->integer('quantity');
            $table->double('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_order_details');
    }
};
