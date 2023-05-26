<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Session;
use Stripe;
class OredrtController extends Controller
{
    

    public function OrderSave(){
      if (Auth::check()) {
        $user = Auth::user();
        $userid = $user->id;
        
        $data = Cart::all();
        
        foreach ($data as $cartItem) {
            $Order = new Order();
            $Order->ProductId = $cartItem->ProductId;
            $Order->userId = $userid;
            $Order->userName = $user->name;
            $Order->phone = $user->phone;
            $Order->City = $user->City;
            $Order->Ltype = $user->Ltype;
            $Order->address = $user->address;
            $Order->quntity = $cartItem->quntity;
            $Order->total = $cartItem->total;
            $Order->Price = $cartItem->Price;
            $Order->status = "processing";
            $Order->save();
            
            $product = Product::find($cartItem->ProductId);
            $quantity = $product->quantity;
            $product->quantity = $quantity - $cartItem->quntity;
            $product->save();
        }
        
        // Remove all items from the cart table
        Cart::truncate();
        $cart = Cart::all(); // Get an updated list of cart items (which will be empty in this case)
        
        return View('auth.register', compact('cart'));
    
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
