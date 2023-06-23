<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class WishlistController extends Controller
{
    //

    public function store($id){

       
        if(Auth::check()){
        $use_id=Auth::user()->id;
        $product=product::find($id);

        $Wishlist=new Wishlist();
        $Wishlist->userId=$use_id;
        $Wishlist->ProductId=$product->id;
        $Wishlist->save();
        Alert::class::success('product Added WishtList','We have addeed product to the  WishtList');
        return redirect()->back();
        }
       else{
        return redirect('login');
       }
        
    }

    public function View(){
      

        if (Auth::check()) {
            $wishitList= Wishlist::where('userId',Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
          
            return View('Home.wishitList',compact('wishitList'));
        
        } else {
            return redirect('login');
       
    }
    }


    public function addCart($id){

        
       
        if(Auth::check()){
            $use_id=Auth::user()->id;
  
       
          $product=product::find($id);
          
              $cart=new Cart();
  
              $cart->userId=$use_id;
              $cart->ProductId=$product->id;
              $cart->quntity=1;
            
              $cart->save();

             
            Alert::class::success('product Added Successfuly','We have addeed product to the cart');
              return redirect()->back();
              }
          
              
         }
         
         public function Delete($id){
            $data=Wishlist::find($id);
            $data->delete();
            Alert::warning('product Deleted Successfuly', 'Pleace try anther product');
            return redirect()->back();
  
        }

}
    
    