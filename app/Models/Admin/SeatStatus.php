<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SeatStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'seat_id',
        'showtime_id',
    ];

    public function seat(): BelongsTo
    {
        return $this->belongsTo(Seat::class);
    }
    public function showTime()
    {
        return $this->belongsTo(ShowTime::class);
    }
}
