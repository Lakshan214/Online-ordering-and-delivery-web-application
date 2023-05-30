<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Stripe;
class OredrtController extends Controller
{


    public function OrderSave(Request $request){
     
    

      
        $sessionId = Session::getId();
           
           // Retrieve the session ID
           $cartItems = Cart::where('sessionId', $sessionId)->get();
           $productIds = $cartItems->pluck('ProductId');
           
           // Retrieve the product details for the product IDs
           $products = Product::whereIn('id', $productIds)->get();
           
              // Save cart items to the order table
              $Order = new Order();
              // $Order->user_Id = Auth::user()->id;
              $Order->name = $request->name;
              $Order->phone = $request->phone;
              $Order->City = $request->City;
              // $Order->email = $request->email;
              $Order->Locatontype = $request->Ltype;
              $Order->address = $request->address;
              $Order->pmode = $request->payment;
              $Order->status = "processing";
              $Order->save();
              
              foreach ($cartItems as $cartItem) {
                $product = $products->firstWhere('id', $cartItem->ProductId);
                if ($product) {
                    $orderItem = new OrderItem();
                    $orderItem->orderId = $Order->id;
                    $orderItem->quntity = $cartItem->quntity;
                    $orderItem->ProductId = $cartItem->ProductId;
                    $orderItem->name = $product->Name;
                    $orderItem->img = $product->image;
                    $orderItem->price = $product->Price;
                    $orderItem->save();
                }
              
              }
              // Clear cart items (optional if you want to remove items from the cart table)
              Cart::where('sessionId', $sessionId)->delete();
      
              return redirect()->back();
        
      }
      
    

      

    
    public function Registerview(){
        
       
      $getCartItems=Cart::getCartItems();
       return View('auth.register',compact('getCartItems'));
    }
    
    public function signin(){
        
       
      
       return View('Home.sigin');
    }



    public function stripView($total){

      if (Auth::check()){
      return View('Home.strip',compact('total'));
      }

      else
      {
  
        return redirect('login');
      }
    }




    public function stripePost(Request $request)
{
    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    Stripe\Charge::create([
        "amount" => 100 * 100,
        "currency" => "usd",
        "source" => $request->stripeToken,
        "description" => "Thanks for payment"
    ]);

    // Session::flash('success', 'Payment successful!');


}

public function View(){
  if (Auth::check()) {
  $order= Order::where('userId',Auth::user()->id)->orderBy('created_at','desc')->get();
  
   return View('Home.oder',compact('order'));
  }
  else
  {

    return redirect('login');
  }
}



public function paymentMode(Request $request, $id){
  dd($id);
  // $Order=Order::find($id);
  //  $Order->pmode="1";
   
  // $Order->save();
  return View('Home.oder');
}

}
