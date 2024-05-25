<?php

use App\Models\Movie;
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
            $table->date('show_date')->comment('ngày chiếu phim');
            $table->time('show_time')->comment('thời gian chiếu phim');
            $table->time('end_time')->comment('thời gian phim kết thúc');
            $table->string('auditorium')->comment('phòng chiếu phim');
            $table->integer('available_seats')->comment('số lượng ghế còn trống trong phòng');
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
