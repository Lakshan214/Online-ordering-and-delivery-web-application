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
     
    
      if (Auth::check()){
      
        $sessionId = Session::getId();
           
           // Retrieve the session ID
           $cartItems = Cart::where('sessionId', $sessionId)->get();
           $productIds = $cartItems->pluck('ProductId');
           
           // Retrieve the product details for the product IDs
           $products = Product::whereIn('id', $productIds)->get();
           
              // Save cart items to the order table
              $Order = new Order();
              $Order->user_Id = Auth::user()->id;
              $Order->name = Auth::user()->name;
              $Order->phone = Auth::user()->phone;
              $Order->email = Auth::user()->email;
              $Order->City = $request->City;
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
 
                    // ..............Quntty hadlaing................. 

                    $productQ=Product::find( $productIds);
                    $quntty= $productQ->quntity;
                    $newquntty= $quntty-$cartItem->quntity;
                    $productQ->quntity=$newquntty;
                    $productQ->save();
                }
              
              }}
              // Clear cart items (optional if you want to remove items from the cart table)
              Cart::where('sessionId', $sessionId)->delete();
      
              return redirect()->back();
       
      }
      
    

      

    
    public function Registerview(){
        
      if (Auth::check()){
      $getCartItems=Cart::getCartItems();
     
       return View('auth.register',compact('getCartItems'));
      }
      else
      {
  
        return redirect('login');
      }
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
    $order= Order::where('user_Id',Auth::user()->id)->orderBy('created_at','desc')->get();
  
    return View('Home.oder',compact('order'));

} else {
    return redirect('login');
}

}





}
