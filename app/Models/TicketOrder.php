<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketOrder extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'movie_id',
        'showtime_id',
        'discount_id',
        'total_price',
        'number_ticket',
        'payment_method'

    ];
}
