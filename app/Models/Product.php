<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
         'Name',
         'image',
         'image1',
         'image2',
         'Catagory',
         'Catagory_id',
         'strar',
         'status',
         'trending',
         'meta_Taitle',
         'meta_keyword',
         'quantity',
         'Price',
         'Descrtiptton',
    ];


public function catagory()
{
    return $this->belongsTo(Catagory::class,'Catagory_id','id'); 
}


public function productImages()
{
    return $this->belongsTo(ProductImg::class,'product_id','id'); 
}
}