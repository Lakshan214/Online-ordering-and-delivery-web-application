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
use PharIo\Manifest\Url;
use Stripe;
use Illuminate\Support\Facades\Mail;
use App\Mail\InoviceOrderMailble;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
class OredrtController extends Controller
{


    public function OrderSave(Request $request){
     
    
      if (Auth::check()) {
        // Retrieve the cart items for the user
        $cartItems = Cart::where('userId', Auth::user()->id)->get();
        $productIds = $cartItems->pluck('ProductId');
    
        // Retrieve the product details for the product IDs
        $products = Product::whereIn('id', $productIds)->get();
    
        // Save cart items to the order table
        $order = new Order();
        $order->user_Id = Auth::user()->id;
        $order->name = Auth::user()->name;
        $order->phone = Auth::user()->phone;
        $order->email = Auth::user()->email;
        $order->City = Auth::user()->City;
        $order->Locatontype = Auth::user()->Ltype;
        $order->address =Auth::user()->address;
        $order->pmode = $request->payment;
        $order->status = "processing";
        $order->save();
    
        foreach ($cartItems as $cartItem) {
            $product = $products->firstWhere('id', $cartItem->ProductId);
            if ($product) {
                $orderItem = new OrderItem();
                $orderItem->orderId = $order->id;
                $orderItem->quntity = $cartItem->quntity;
                $orderItem->ProductId = $cartItem->ProductId;
                $orderItem->name = $product->Name;
                $orderItem->img = $product->image;
                $orderItem->price = $product->Price;
                $orderItem->save();
    
                // Quantity handling
                $productQ = Product::find($cartItem->ProductId);
                $quantity = $productQ->quntity;
                if($quantity >0){
                $newQuantity = $quantity - $cartItem->quntity;
                $productQ->quantity = $newQuantity;
                $productQ->save();
                }
            }
        }
    
        // Delete cart items
        $cartItems->each->delete();
       if($order->pmode=='Card_Payment'){
       
         return View('Home.strip');
          
       }
    }
    return redirect()->back();
   
  }
      
    

      

    
    public function Registerview(){
        
      if (Auth::check()){
      $getCartItems=Cart::getCartItems();
      $user = User::find(Auth::user()->id);
       return View('auth.register',compact('getCartItems','user'));
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


    if (Auth::check()) {
      // Retrieve the cart items for the user
      $cartItems = Cart::where('userId', Auth::user()->id)->get();
      $productIds = $cartItems->pluck('ProductId');
  
      // Retrieve the product details for the product IDs
      $products = Product::whereIn('id', $productIds)->get();
  
      // Save cart items to the order table
      $order = new Order();
      $order->user_Id = Auth::user()->id;
      $order->name = Auth::user()->name;
      $order->phone = Auth::user()->phone;
      $order->email = Auth::user()->email;
      $order->City = Auth::user()->City;
      $order->Locatontype = Auth::user()->Ltype;
      $order->address =Auth::user()->address;
      $order->pmode = $request->payment;
      $order->status = "processing";
      $order->save();
  
      foreach ($cartItems as $cartItem) {
          $product = $products->firstWhere('id', $cartItem->ProductId);
          if ($product) {
              $orderItem = new OrderItem();
              $orderItem->orderId = $order->id;
              $orderItem->quntity = $cartItem->quntity;
              $orderItem->ProductId = $cartItem->ProductId;
              $orderItem->name = $product->Name;
              $orderItem->img = $product->image;
              $orderItem->price = $product->Price;
              $orderItem->save();
  
              // Quantity handling
              $productQ = Product::find($cartItem->ProductId);
              $quantity = $productQ->quntity;
              if($quantity >0){
              $newQuantity = $quantity - $cartItem->quntity;
              $productQ->quantity = $newQuantity;
              $productQ->save();
              }
              return redirect()->route('order.View');
          }
      }
  
      
     }
    Session::flash('success', 'Payment successful!');


}

public function View(){
  if (Auth::check()) {
    $order= Order::where('user_Id',Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
  
    return View('Home.oder',compact('order'));

} else {
    return redirect('login');
}

}



public function orderDetails($id)
{

  $orderid=$id;
  $orderItem= OrderItem::where('orderId',$orderid)->orderBy('created_at','desc')->get();

  
    $order= Order::where('id', $orderid)->orderBy('created_at','desc')->get();
  
   
    return View('Home.orderDetails',compact('order','orderItem','orderid'));
  
  }


  public function usedetailsSave(Request $request){
    

    $order = User::find(Auth::user()->id);
    $order->City = $request->City;
    $order->phone = $request->phone;
    $order->Locatontype = $request->Ltype;
    $order->address = $request->address;
    $order->pmode = $request->payment;
    $order->status = "processing";
    $order->save();
    if($order->pmode=='Card_Payment'){
       
      return View('Home.strip');
       
    }
    else{
      if (Auth::check()) {
        // Retrieve the cart items for the user
        $cartItems = Cart::where('userId', Auth::user()->id)->get();
        $productIds = $cartItems->pluck('ProductId');
    
        // Retrieve the product details for the product IDs
        $products = Product::whereIn('id', $productIds)->get();
    
        // Save cart items to the order table
        $order = new Order();
        $order->user_Id = Auth::user()->id;
        $order->name = Auth::user()->name;
        $order->phone = Auth::user()->phone;
        $order->email = Auth::user()->email;
        $order->City = Auth::user()->City;
        $order->Locatontype = Auth::user()->Ltype;
        $order->address =Auth::user()->address;
        $order->pmode = $request->payment;
        $order->status = "processing";
        $order->save();
    
        foreach ($cartItems as $cartItem) {
            $product = $products->firstWhere('id', $cartItem->ProductId);
            if ($product) {
                $orderItem = new OrderItem();
                $orderItem->orderId = $order->id;
                $orderItem->quntity = $cartItem->quntity;
                $orderItem->ProductId = $cartItem->ProductId;
                $orderItem->name = $product->Name;
                $orderItem->img = $product->image;
                $orderItem->price = $product->Price;
                $orderItem->save();
    
                // Quantity handling
                $productQ = Product::find($cartItem->ProductId);
                $quantity = $productQ->quntity;
                if($quantity >0){
                $newQuantity = $quantity - $cartItem->quntity;
                $productQ->quantity = $newQuantity;
                $productQ->save();
                }
                return redirect()->route('order.View');   
            }
        }


    }
  }
  }


  public function printPDF($id){

  $orderid=$id;
  $orderItem= OrderItem::where('orderId',$orderid)->orderBy('created_at','desc')->get();
  $order= Order::where('id', $orderid)->orderBy('created_at','desc')->get();
  
  $pdf = PDF::class::loadView('Home.invoice', compact('order','orderItem',));
  return $pdf->download('Bill.pdf');
  }

public function sendMail($id){
 
  $order = Order::find($id);

  if (!$order) {
    // Handle the case when the order is not found
    // You can throw an exception, log an error, or return a response
    // based on your application's requirements.
    return;
  }

  Mail::to($order->email)->send(new InoviceOrderMailble($order));

}

public function adminOderView($id){
  $orderid=$id;
  $orderItem= OrderItem::where('orderId',$orderid)->orderBy('created_at','desc')->get();
  $order= Order::where('id', $orderid)->orderBy('created_at','desc')->get();

  return view('admin.orderView',compact('order','orderItem','orderid'));
}

}

