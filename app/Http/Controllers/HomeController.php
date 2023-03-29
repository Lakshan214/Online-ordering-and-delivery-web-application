<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
             return view('dashboard');
        }
    } 


    public function index()
     {  
       return view('Home.index');
     }
  
     
   public function Product_view()
     {
       return view('product.product');
     }
   
     public function singlepage_view()
     {
       return view('Home.singlepage');
     }
    
}
