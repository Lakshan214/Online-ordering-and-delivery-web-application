<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.links')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.saidebar')
      <!-- partial -->
     
      @include('admin.navbar')
          <footer class="footer" style="width: 100%;">
          
            <div style="margin-top: 50px" class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edite products</h4>
                    
                    <form action="{{route('Products.update',$product->id)}}" class="forms-sample" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group" >
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control"name="pname" style="background-color: #2A3038"  value="{{$product->Name}}"  >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">imges:</label>
                        <input type="file" name="image"style="background-color: #2A3038"  class="form-control"  >
                      </div>
                      <img style="width: 50px; height: 50px;" style="background-color: #2A3038" src="/product/{{$product->image}}"><br>
                       {{-- @if ($product->productImages)
                       @foreach ($product->productImages as $image ) --}}
                       <div class="form-group">
                        <label for="exampleInputEmail3">imges1:</label>
                        <input type="file" name="image1"style="background-color: #2A3038"  class="form-control"  >
                      </div>
                       <img style="width: 50px; height: 50px;" style="background-color: #2A3038" src="/product/{{$product->image1}}"><br>
 
                           
                       {{-- @endforeach
                           
                       @else
                           <h5>No Image ADD</h5>
                       @endif  --}}
                       <div class="form-group">
                        <label for="exampleInputEmail3">imges2:</label>
                        <input type="file" name="image2"style="background-color: #2A3038"  class="form-control"  >
                      </div>

                      <img style="width: 50px; height: 50px;" style="background-color: #2A3038" src="/product/{{$product->image2}}"><br>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Product Catagory:</label>
                        {{-- <input type="text" class="form-control"style="background-color: #2A3038"  name="Pcatagory" value="{{$product->Catagory}}"  > --}}
                        <select class="form-control" required="" style="background-color: #2A3038" name="Pcatagory">
                          @foreach ($catagory as $catagory )
                            <option value=" {{$catagory->id}}"{{$catagory->id==$product->Catagory_id ? 'selected':''}}>
                                 {{$catagory->CatagoryName}}
                            </option>  
                          @endforeach  
                        </select> <br>
                      </div>
                     
                      
                      
                      <div class="form-group">
                        <label for="exampleInputCity1">Quantity:</label>
                        <input type="number" value="{{$product->quantity}}"name="PQuntty" style="background-color: #2A3038"  class="form-control" >
                      </div>

                      <div class="form-group">
                        <label for="exampleInputCity1">Price:</label>
                        <input type="number"  value="{{$product->Price}}" name="Pprice" style="background-color: #2A3038"  class="form-control" >
                      </div>

                      <div class="form-group">
                      <label for="recipient-name" class="col-form-label">status:</label>
                          <input type="checkbox" name="status"style="background-color: #2A3038" value="" {{$product->trending==1 ? 'checked':''}} class="form-control" >
                          <label for="recipient-name" class="col-form-label">trending:</label>
                            <input type="checkbox" name="trending"style="background-color: #2A3038" value=""  {{$product->trending==1 ? 'checked':''}} class="form-control" >
                      </div>

                      <div class="form-group">
                        <label for="exampleTextarea1">description:</label>
                        <textarea class="form-control" name="Pdescripton" style="background-color: #2A3038"  rows="4">{{$product->Descrtiptton}}</textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" style="background-color: green;border-color:white;height: 40px; ">Save Edite Product</button>
                      <a class="btn btn-dark" href="{{ url('/Products') }}" style="background-color: red; border-color:white;height: 40px;">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>

          </footer>
         
        </div>
     
      </div>
 
 
   
    @include('admin.js')
  </body>
</html>