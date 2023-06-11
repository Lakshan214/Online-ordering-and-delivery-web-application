<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        }
       else{
        return redirect('login');
       }
        
    }
}
