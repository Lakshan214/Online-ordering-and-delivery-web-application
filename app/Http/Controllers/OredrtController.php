<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Session;
use Stripe;
class OredrtController extends Controller
{
    

    public function OrderSave($total){

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
                  // $Order->pmode=$request->status == true ? '1':'0';
                 $Order->save();

                 $product=Product::find($data->ProductId);
                 $quntity=$product->quantity;
                 $product->quantity=$quntity-$data->quntity;
                 $product->save();
                 
                 $cart=Cart::all();
                 return View('auth.register',compact('cart'));
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
    // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    // Stripe\Charge::create([
    //     "amount" => 100 * 100,
    //     "currency" => "usd",
    //     "source" => $request->stripeToken,
    //     "description" => "Thanks for payment"
    // ]);

    // Session::flash('success', 'Payment successful!');

    return back();
}
}
