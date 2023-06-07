<?php

namespace App\Http\Controllers;
use App\Models\Slider;
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
    
            return redirect()->back();
    
        } 
    
    
        public function SliderDelete($id){
           
            Slider::findOrFail($id)->delete();
            return redirect()->back();
    
        } 
    
    
        public function SliderInactive($id){
            Slider::findOrFail($id)->update(['status' => 0]);
            return redirect()->back();
    
        } 
        
    
    
        public function SliderActive($id){
            Slider::findOrFail($id)->update(['status' => 1]);
            return redirect()->back();
    
        }
}
