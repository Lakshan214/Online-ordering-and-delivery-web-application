<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class CartController extends Controller
{
    public function AddToCart(Request $request,$id){

      $sessionId = session()->get('sessionId');

      if (empty($sessionId)) {
          $sessionId = session()->getId();
          session()->put('sessionId', $sessionId);
      }

      if(Auth::check()){
          $use_id=Auth::user()->id;

      }
      else{
        $use_id=0;
      }
        $product=product::find($id);
        $product_exist_id = cart::where('ProductId', $id)
        ->where('sessionId', $sessionId)
        ->first();

        if($product_exist_id!= null){
 
            $cart=cart::find($product_exist_id)->first();
            $Quantity=$cart->quntity;
            // $cart->quntity=$Quantity;
            $cart->quntity=$Quantity+ $request->quntity;
             $cart->save();
             Alert::class::success('product already exists' ,'changed the quantity');
            return redirect()->back();
        }
        else{
            $cart=new cart;

            $cart->userId=$use_id;
            $cart->ProductId=$product->id;
            $cart->quntity=$request->quntity;
            $cart->sessionId= $sessionId;
          
            $cart->save();
           
          Alert::class::success('product Added Successfuly','We have addeed product to the cart');
            return redirect()->back();
            }
            $product = Product::find($id);
            $product->increment('counter');
           
       }
       
    


      public function showCart(){

        $getCartItems=Cart::getCartItems();
        return View('Home.cart',compact('getCartItems'));
      }
      
      public function DeleteCart($id){
          $data=Cart::find($id);
          $data->delete();
          Alert::warning('product Deleted Successfuly', 'Pleace try anther product');
          return redirect()->back();

      }


      public function UpdateCart(Request $request,$id){
        
            $product=product::find($id);
            $data=Cart::find($id);
            $data->quntity=$request->quntity;
            $data->save();

            // Alert::class::success('quntity change Successfuly');
            toast('quntity change Successfuly','success');
            // alert('Title','Lorem Lorem Lorem', 'success');
            return redirect()->back();
    
       }


}

