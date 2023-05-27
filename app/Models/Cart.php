<?php

namespace App\Models;

use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    public static function getCartItems(){
        if(Auth::check()){
            $getCartItems = Cart::with(['product'=>function($query){
                $query->select('id','Catagory_id','Brand_id','image','Name','Price','quantity');
            }])->orderBy('id','Desc')->where('userId', Auth::user()->id)->get()->toArray();
        } else {
            $sessionId = request()->session()->getId();
            $getCartItems = Cart::with(['product'=>function($query){
                $query->select('id','Catagory_id','Brand_id','image','Name','Price','quantity');
            }])->orderBy('id','Desc')->where('sessionId', $sessionId)->get()->toArray();
        }
        return $getCartItems;
    }

    public function product(){
       return $this->belongsTo('App\Models\Product','ProductId');

    }
}


