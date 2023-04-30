<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
         
    {   
        $catagory=Catagory::all();
         $product=Product::all();
        return view('admin.product',compact('product'),compact('catagory'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->Name=$request->pname;
        $product->Catagory=$request->Pcatagory;
        $product->quantity=$request->PQuntty;
        $product->Price=$request->Pprice;
        $product->Descrtiptton=$request->Pdescripton;

        $imagename=$request->image;
        $imagename=time().'.'.$request->image->extension();
        $request->image->move('product',$imagename);  
        $product->image=$imagename;
       
        $imagename1=$request->image1;
        $imagename1=time().'.'.$request->image1->extension();
        $request->image1->move('product',$imagename1);  
        $product->image1=$imagename1;
        
        $imagename2=$request->image2;
        $imagename2=time().'.'.$request->image2->extension();
        $request->image2->move('product',$imagename2);  
        $product->image2=$imagename;
  
  
        $product->save();
        return redirect()->back()->with ('message',' Added Sucessfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {   
        $catagory=Catagory::all();
        $product=product::find($id);
        return view('admin.editeProduct',compact('product'),compact('catagory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=product::find($id);
        $product->Name=$request->pname;
        $product->Catagory=$request->Pcatagory;
        $product->quantity=$request->PQuntty;
        $product->Price=$request->Pprice;
        $product->Descrtiptton=$request->Pdescripton;
      
        $image=$request->image;
        $image1=$request->image1;
        $image2=$request->image2;
      
        if($image)
        {
        $image=time().'.'.$request->image->extension();
        $request->image->move('product',$image);  
        $product->image=$image;
       }
       if($image1)
        {
        $image1=time().'.'.$request->image1->extension();
        $request->image1->move('product',$image1);  
        $product->image1=$image1;
       }

       if($image2)
        {
        $image2=time().'.'.$request->image2->extension();
        $request->image2->move('product',$image2);  
        $product->image2=$image2;
       }
        $product->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Product::find($id);

        $data->delete();
       return redirect()->back()->with ('message',' Added Sucessfully!!');
    }
}
