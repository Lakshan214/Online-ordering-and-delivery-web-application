<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    
        public function SliderView(){
            $sliders = Slider::latest()->get();
            return view('admin.slider.sliderView',compact('sliders'));
        }
    
        
            public function SliderStore(Request $request){
          
                $slider=new Slider();
                $image=$request->sliderImg;
               
              
                if($image)
                {
                $image=uniqid().'.'.$request->sliderImg->extension();
                $request->sliderImg->move('product',$image);  
                $slider->sliderImg=$image;
         
                }
                $slider->save();
           
            toast('Ddd Sucessfully!!','success');
            return redirect()->back();
    
        } 
    
    
        public function SliderDelete($id){
           
            Slider::findOrFail($id)->delete();
            toast('Deleted Sucessfully!!','error');
            return redirect()->back();
    
        } 
    
    
        public function SliderInactive($id){
            Slider::findOrFail($id)->update(['status' => 0]);
            toast('Inactive Sucessfully!!','error');
            return redirect()->back();
    
        } 
        
    
    
        public function SliderActive($id){
            toast('Product Active( Sucessfully!!','success');
            Slider::findOrFail($id)->update(['status' => 1]);
            return redirect()->back();
    
        }

        // public function store($id){

        //     dd($id);
        //     if(Auth::check()){
        //     $use_id=Auth::user()->id;
        //     $product=product::find($id);
    
        //     $Wishlist=new Wishlist();
        //     $Wishlist->userId=$use_id;
        //     $Wishlist->ProductId=$product->id;
        //     $Wishlist->save();
        //     }
        //    else{
        //     return redirect('login');
        //    }
}
