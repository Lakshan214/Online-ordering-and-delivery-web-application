<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\ProductImg;

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
        $brand= Brand::latest()->get();
        $catagory= Catagory::orderBy('CatagoryName' , 'ASC')->get();
         $products=Product::paginate(5);
        return view('admin.product',compact('products','catagory','brand'));
       
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
        $product->Catagory_id=$request->Pcatagory;
        $product->Brand_id=$request->Pbrand;
        $product->quantity=$request->PQuntty;
        $product->Price=$request->Pprice;
        $product->Descrtiptton=$request->Pdescripton;
        $product->trending=$request->trending==true ? '1':'0';
        $product->status=1;
        $product->meta_Taitle=$request->meta_Taitle;
        $product->meta_keyword=$request->meta_keyword;
        
        $image=$request->image;
        $image1=$request->image1;
        $image2=$request->image2;
      
      
        if($image)
        {
        $image=uniqid().'.'.$request->image->extension();
        $request->image->move('product',$image);  
        $product->image=$image;
 
        }
        if($image1)
        {
        $image1=uniqid().'.'.$request->image1->extension();
        $request->image1->move('product',$image1);  
        $product->image1=$image1;
 
        }
        if($image2)
        {
        $image2=uniqid().'.'.$request->image2->extension();
        $request->image2->move('product',$image2);  
        $product->image2=$image2;
 
        }
      
       
        
    //   if ($request->hasFile('image1')){
         
    //     $filepath='product';

    //     foreach($request->file('image1')as $imageFile){
    //         $extenton=$imageFile->getClientOriginalExtension();
    //         $filename=uniqid().'.'.$extenton;
    //         $imageFile->move($filepath,$filename);
    //         $finalImagePath=$filepath.'/'.$filename;

    //         $product->productImages()->create(
    //             [
    //                  'product_id'=>$product->id,
    //                  'img'=>$finalImagePath,
    //             ]
    //             );

    //         }}

        
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
        $product->Catagory_id=$request->Pcatagory;
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
       return redirect()->back();
    }

    public function ProductActive($id){
        Product::findOrFail($id)->update(['status' => 1]);
        return redirect()->back();

    }

    public function ProductInactive($id){
        Product::findOrFail($id)->update(['status' => 0]);
        return redirect()->back();
    }
}
