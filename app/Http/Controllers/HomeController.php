<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Catagory;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductImg;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
          $Brand=Brand::all();
          $product=Product::all();
          $catagory=Catagory::all();
          $catagory1=Catagory::all();
          $product1=Product::all();
          $product2=Product::all();
          $product3=Product::all();
            return view('Home.index',compact('catagory','catagory1','product','product1','product2','product3','Brand'));
        }
    } 


    public function index()
     {  
      $Brand=Brand::all();
      $product=Product::all();
      $catagory2=Catagory::all();
      $catagory1=Catagory::all();
      $product1=Product::all();
      $product2=Product::all();
      $product3=Product::latest()->get();
      $cart=Cart::all();
      
      // Cart::truncate();
      return view('Home.index',compact('catagory2','catagory1','product','product1','product2','product3','Brand','cart'));
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
          $product=$catagory->product()->get();

         

         return view('Home.product.product',compact('product','catagory'));
         }

         else
         {
          return redirect()->back();
         }

       }
       

       public function brandByProduct($slug)
     {  

          $brand=Brand::where('slug',$slug)->first();
          if($brand)
         {
          $product=$brand->product()->get();

         

         return view('Home.catagory.brandProduct',compact('product','brand'));
         }

         else
         {
          return redirect()->back();
         }

       }
      
 
      
      
}
