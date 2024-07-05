<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = [
        "code",
        "value",
        "discount_type",
        "expiry_date",
        "usage_limit",
        "status"
    ];
    
}
