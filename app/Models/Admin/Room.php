<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'seat_count'
    ];

    public function seat():HasMany
    {
        return $this->hasMany(Seat::class);
    }
}
