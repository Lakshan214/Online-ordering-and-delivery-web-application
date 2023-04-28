<div style="margin-top: 100px ">
   
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Product  add   successful!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   @endif 


   
    
    <div class="modal fade" id="exampleModal1{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$product->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel{{$product->id}}">Add product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
         {{-- @foreach ( $product as $product) --}}
             
        
            <form action="{{route('Products.update',$product->id)}}"method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                

                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>           
                <input type="text" name="pname"style="background-color: #2A3038" value="{{$product->Name}}" required=""  class="form-control" >
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Image:</label>
                <input type="file" name="image" style="background-color: #2A3038" class="form-control" >
                </div>

                <img style="width: 50px; height: 50px;" src="/product/{{$product->image}}">

              <div class="form-group">
                <label  class="col-form-label">Product Catagory::</label>
                <input type="text"name="Pcatagory"style="background-color: #2A3038" value="{{$product->Catagory}}" required="" class="form-control" >
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Quantity:</label>
                <input type="number" value="{{$product->quantity}}" required="" name="PQuntty" style="background-color: #2A3038" class="form-control" >
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Price:</label>
                <input type="number"  required="" value="{{$product->Price}}"  style="background-color: #2A3038"  name="Pprice"required="" class="form-control" >
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">description:</label>
                <textarea style="height: 70px;" class="form-control" name="Pdescripton">{{$product->Descrtiptton}}</textarea>
              </div>
           
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success"> Add Product</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            {{-- @endforeach   --}}
          </div>
        {{-- </form> --}}
        </div>
      </div>
    </div>
    </div> 