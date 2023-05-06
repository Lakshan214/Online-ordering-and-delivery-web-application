<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;

    protected $fillable = [
        'CatagoryName',
        'image',
        'slug',
        'populer',
        'status',
        'meta titel',
    ];

    public function product(){
        return $this->hasmany(Product::class,'Catagory_id','id');
  }
}
