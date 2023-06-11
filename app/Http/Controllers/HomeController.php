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
        $order = Order::when($request->date != null, function($q) use ($request){
                return $q->whereDate('created_at',Carbon::now()->format('y-m-d'));
            })
            ->when($request->status != null, function($q) use ($request){
                return $q->where('status', $request->status);
            })
            ->paginate(5);
            $user = User::where('userType', 2)->get();
        return view('admin.home', compact('order','user'));
    }
    
       elseif ($userType=='2') 
        {
             return view('deliver.home');
        }
       else
        {
          
          
       
            return redirect()->route('index');;
        }
    } 


    public function index()
     {  
      $Brands=Brand::paginate(8);
      $product=Product::all();
      $catagory2=Catagory::all();
      $catagory1=Catagory::all();
      $product1=Product::all();
      $product2=Product::all();
      $product3=Product::latest()->get();
      $slider=Slider::latest()->get();
     
      
      
      return view('Home.index',compact('catagory2','catagory1','product','product1','product2','product3','Brands','slider'));
     }

    
  
     
   
     public function singlepage_view($id)
     {
      $product=product::find($id);
      $img=ProductImg::all();
      
       return view('Home.singlepage',compact('product','img'));
     }




    
     public function catagoryByProduct($slug)
     {  

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
       

       public function brandByProduct($slug)
     {  

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
