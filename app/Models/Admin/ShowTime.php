<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'movie_id',
        'room_id',
        'show_date',
        'start_time',
        'end_time',
    ];
}
