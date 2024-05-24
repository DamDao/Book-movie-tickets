<?php

use App\Models\Discount;
use App\Models\Movie;
use App\Models\Showtime;
use App\Models\User;
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
        Schema::create('ticket_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Movie::class)->constrained();
            $table->foreignIdFor(Showtime::class)->constrained();
            $table->foreignIdFor(Discount::class)->nullable()->constrained();
            $table->double('total_price');
            $table->integer('number_ticket');
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_orders');
    }
};
