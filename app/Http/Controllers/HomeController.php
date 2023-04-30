<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
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
             return view('Home.index');
        }
    } 


    public function index()
     {  
      $product=Product::all();
      $product1=Product::all();
      $product3=Product::all();
      $product4=Product::all();
      
       return view('Home.index',compact('product','product1','product3','product4'));
     }
  
     
   public function Product_view()
     {
      $product=Product::all();
       return view('product.product',compact('product'));
     }
   
     public function singlepage_view($id)
     {
      $product=product::find($id);
      
       return view('Home.singlepage',compact('product'));
     }
    
}
