<?php

use App\Models\Seat;
use App\Models\Showtime;
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
        Schema::create('seat_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Seat::class)->constrained();
            $table->foreignIdFor(Showtime::class)->constrained();
            $table->integer('status')->default(0)->comment('trạng thái ghế đã ddc đặt hay chx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_statuses');
    }
};
