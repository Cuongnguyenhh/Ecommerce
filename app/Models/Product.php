<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_id',
        'product_name',
        'price',
        'product_visible',
        'category_id',
        'description',
        'sold',
    ];
    use HasFactory;
    protected $table = 'products';
    public function category(){
        $this->belongsTo(Category::class);
    }
    public function images(){
        return $this->hasMany(Images::class);
    }
}
