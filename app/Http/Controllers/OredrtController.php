<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class OredrtController extends Controller
{
    

    public function OrderSave(){
        if (Auth::check()){
      
            $user=Auth::user();
            $userid=$user->id;
            $data=Cart::all();
            foreach($data as $data){
                $Order=new Order();
                  
                  $Order->ProductId=$data->ProductId;
                  $Order->userId=$userid;
                  $Order->Name=$data->Name;
                  $Order->ProductId=$data->ProductId;
                  $Order->image=$data->image;
                  $Order->quntity=$data->quntity;
                  $Order->total=$data->total;
                  $Order->Price=$data->Price;
                 $Order->save();
                 $product=Product::find($data->ProductId);

                 $quntity=$product->quantity;
                 $product->quantity=$quntity-$data->quntity;
                 $product->save();
                 
                  Cart::truncate();
                 
                  return redirect()->back();
            }
          }
      
          else
          {
      
            return redirect('login');
          }
    }

    public function Registerview(){
        
       
        $cart=Cart::all();
       return View('auth.register',compact('cart'));
    }
}
