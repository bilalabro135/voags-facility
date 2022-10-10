<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherPurchase extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'purchase_id',
        'stock',
        'qty',
        'unit_price',
        'total_cost',
        'description',
    ];
}
