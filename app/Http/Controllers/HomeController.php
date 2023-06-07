<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Catagory;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductImg;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller 

{
    public function redirect()
    {
      $userType=Auth::user()->userType;

      if($userType=='1')
        {
             return view('admin.home');
        }
       elseif ($userType=='2') 
        {
             return view('deliver.home');
        }
       else
        {

          return redirect()->back();
          // $Brand=Brand::all();
          // $product=Product::all();
          // $catagory=Catagory::all();
          // $catagory1=Catagory::all();
          // $product1=Product::all();
          // $product2=Product::all();
          // $product3=Product::all();
       
          //   return view('auth.register',compact('catagory','catagory1','product','product1','product2','product3','Brand'));
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
          $products=$brand->product()->paginate(1);

         

         return view('Home.catagory.brandProduct',compact('products','brand'));
         }

         else
         {
          return redirect()->back();
         }

       }
      
 
      
      
}
