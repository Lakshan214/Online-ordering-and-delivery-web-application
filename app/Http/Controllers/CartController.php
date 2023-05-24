<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddToCart(Request $request,$id){
        $product=product::find($id);
        $product_exist_id=cart::where('ProductId','=',$id)->get('id')->first();

        if($product_exist_id!= null){
 
            $cart=cart::find($product_exist_id)->first();
            $Quantity=$cart->quntity;
            // $cart->quntity=$Quantity;
            $cart->quntity=$Quantity+ $request->quntity;
 
            $cart->total=$product->Price*$cart->quntity;
           
 
            $cart->save();
 
            return redirect()->back();
        }
        else{
        $cart=new cart;

        $cart->Name=$product->Name;
        $cart->ProductId=$product->id;
        $cart->image=$product->image;
        $cart->quntity=$request->quntity;
        $cart->Price=$product->Price;
        $cart->total=$product->Price*$request->quntity;
        $cart->save();

       
        return redirect()->back();
        }
       }
       
    
      // public function showCart(){

      //  $cart=Cart::all();
      //   return View('Home.cart',compact('cart'));
      // }
      
      public function DeleteCart($id){

       $data=Cart::find($id);
       $data->delete();
       return redirect()->back();

      }


      public function UpdateCart(Request $request,$id){
        
        $product=product::find($id);
        $data=Cart::find($id);
        $data->quntity=$request->quntity;
    
        $data->total=$product->Price*$request->quntity;
        $data->save();
      
        return redirect()->back();
 
       }


}

