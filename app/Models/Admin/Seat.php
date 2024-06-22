<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'seat_code',
    ];
   
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function seatStatus():HasMany
    {
        return $this->hasMany(SeatStatus::class);
    }
}
