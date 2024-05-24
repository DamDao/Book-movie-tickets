<?php

use App\Models\Movie;
use App\Models\Room;
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
        Schema::create('showtimes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class)->constrained();
            $table->foreignIdFor(Room::class)->constrained();
            $table->date('show_date')->comment('ngày chiếu');
            $table->time('start_time')->comment('giờ bắt đầu chiếu');
            $table->time('end_time')->comment('giờ kết thúc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('showtimes');
    }
};
