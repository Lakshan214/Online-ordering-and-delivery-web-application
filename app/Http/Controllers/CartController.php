<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddToCart(Request $request,$id){
        $product=product::find($id);

        $cart=new cart;

        $cart->Name=$product->Name;
        $cart->image=$product->image;
        $cart->quntity=$request->quntity;
        $cart->Price=$product->Price;
        $cart->total=$product->Price*$request->quntity;
        $cart->save();

        return redirect()->back();
       }
       
    
      public function showCart(){

       $cart=Cart::all();
        return View('Home.cart',compact('cart'));
      }
      
      public function DeleteCart($id){

       $data=Cart::find($id);
       $data->delete();
       return redirect()->back();

      }
}
