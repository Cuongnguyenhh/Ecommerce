<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'id_product',
        'link',
        
    ];
    // protected $attributes = ['link' => '0', 'id_product' => '9'];
    use HasFactory;
    protected $table = 'images';

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
