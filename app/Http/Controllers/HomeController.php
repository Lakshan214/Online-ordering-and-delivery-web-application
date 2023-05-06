<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
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
          // $product=Product::all();
          // $product1=Product::all();
          // $product3=Product::all();
          // $product4=Product::all();
            //  return view('Home.index',compact('product','product1','product3','product4'));
            return view('Home.index');
        }
    } 


    public function index()
     {  
      $product=Product::all();
      $catagory=Catagory::all();
      $catagory1=Catagory::all();
      // $product1=Product::all();
      // $product3=Product::all();
      // $product4=Product::all();
      
      //  $catagory=Product::all();
      //  $catagory=Product::all();
      //  $catagory=Product::all();
      //  return view('Home.index',compact('product','product1','product3','product4','catagory'));
      return view('Home.index',compact('catagory','catagory1'));
     }
  
     
  //  public function ProductView()
    //  {
    //   if(Catagory::where('slug',$slug)->exists()){

    //     $catagory=Catagory::where('slug',$slug)->first();
    //     $product=Product::where('Catagory_id' ,$catagory->id)->get();
    //     dd( $product);
    //    return view('Home.product.product');
    //   }
     
    //  else
    //  {
    //     return redirect()->back();
    //  }
    // }
     public function singlepage_view($id)
     {
      $product=product::find($id);
      
       return view('Home.singlepage',compact('product'));
     }

     public function show($id)
     {

      // $catagory=Catagory::find($id);
      $product=Catagory::find($id);
      dd($product);
  
          // $catagory=Catagory::where('slug',$slug)->first();
          // $product=Product::where('Catagory_id' ,$catagory->id)->get();
         
         
      // return view('Home.product.product',compact('product'));
     }
    
    


    
    
}
