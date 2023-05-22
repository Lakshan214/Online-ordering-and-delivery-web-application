<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'productId',
        'quntity',
        'price',
        
    ];
    public function product(){
        return $this->hasmany(Cart::class,'product_id','id');
    }
}


