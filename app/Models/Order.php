<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = 
    [
        'user_name',
        'user_phone',
        'user_email',
        'user_address',
        'status',
    ];

    public function order_products() 
    {
        $this->hasOne(OrderProduct::class);
    }
}
