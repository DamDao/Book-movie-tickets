<?php

use App\Models\Seat;
use App\Models\TicketOrder;
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
        Schema::create('ticket_order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TicketOrder::class)->constrained();
            $table->foreignIdFor(Seat::class)->constrained();
            $table->double('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_order_details');
    }
};
