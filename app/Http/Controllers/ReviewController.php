<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Slider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
   

    public function View(){ 
        
        $review =Review::all();
        $slider = Slider::latest()->get();
        return view('Home.review',compact('slider','review'));
    }
   
   
    public function Store(Request $request){
       if(Auth::check()) {
        $user=Auth::user();

         $review = new Review();
         $review->user_id=$user->id;
         $review->review=$request->review;
         $review->save();
         toast('Your Review send Successfuly','success');
        return redirect()->back();
    }
    else{

        return redirect('login');
    }
   }
  

    public function adminView(){ 
    $review =Review::all();
    return view('admin.reviewView',compact('review'));
    }

    public function Delete($id){
           
        Review::findOrFail($id)->delete();
        toast('Delete Sucessfully!!','warning');
        return redirect()->back();

    } 


    public function Inactive($id){
        $status = Review::find($id);
        $status->status=0;
        $status->save();
        toast('Inactive Sucessfully!!','error');
        return redirect()->back();

    } 
    


    public function Active($id){
      
        $status = Review::find($id);
        $status->status=1;
        $status->save();
        toast('Product Active( Sucessfully!!','success');
        return redirect()->back();

    }
}
