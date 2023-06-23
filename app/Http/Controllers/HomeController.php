<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Catagory;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductImg;
use App\Models\Slider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller 

{
    public function redirect(Request $request)
    {
      $userType=Auth::user()->userType;

      if ($userType == '1') {



        $total_product=product::all()->count();
        $total_ordert=Order::all()->count();
        $total_user=User::all()->count();
        $Order=Order::all();
        $total_delivered=Order::where('status','=','Delivered')->get()->count();
        $total_processing=Order::where('status','=','prosseing')->get()->count();
        // .................Serch Oder by date and status.................
        $today=Carbon::now()->format('y-m-d');
        $order = Order::when($request->date != null, function($q) use ($request){
                return $q->whereDate('created_at',$request->date);
        },function ($q) use($today){
          return $q->whereDate('created_at',$today);
        })
            ->when($request->status != null, function($q) use ($request){
                return $q->where('status', $request->status);
            })
            ->paginate(5); 
           
        return view('admin.home', compact('order'));
    }
     // .................End Serch Oder by date and status.................


       elseif ($userType=='2') 
        {  
        //   .....................pass order data by delvery id................ 
          $order  = Order::where('delveryId', Auth::user()->id)->paginate(5); ;
          return view('deliver.home', compact('order'));
        }
       else
        {
          
            return redirect()->route('index');;
        }
    } 



    
    // ................View product description ...............
   
     public function singlepage_view($id)
     {
      $product=product::find($id);
      $img=ProductImg::all();
      
       return view('Home.singlepage',compact('product','img'));
     }
 



 // ................View catagory By Product...............
     public function catagoryByProduct($slug)
     {  
        //  .......slug is using for  idintify  catagory.........
          $catagory=Catagory::where('slug',$slug)->first();
          if($catagory)
         {
          $products=$catagory->product()->paginate(8);
           return view('Home.product.product',compact('products','catagory'));
         }

         else
         {
          $getCartItems=Cart::getCartItems();
          return View('auth.register',compact('getCartItems'));
         }

       }
       
// ................View Brandy By Product...............
       public function brandByProduct($slug)
     {  
          //  .......slug is using for  idintify  brand.........
          $brand=Brand::where('slug',$slug)->first();
          if($brand)
         {
          $products=$brand->product()->paginate(8);
          return view('Home.catagory.brandProduct',compact('products','brand'));
         }

         else
         {
          return redirect()->back();
         }

      }
      
 
      
      
}
