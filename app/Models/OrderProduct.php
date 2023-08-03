<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table = 'order_products';
    protected $fillable =
    [
        'order_product',
        'order_id',
        'quantity',
        
    ];
    public function order(){
       $this->belongsTo(Order::class);
    }
}
