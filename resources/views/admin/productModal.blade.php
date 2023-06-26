<div style="margin-top: 100px ">
   
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Product  add   successful!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   @endif 


    <button style="height: 40px; background-color: #0090e7;" type="button" class="btn btn-primary"   data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><h1>Add Product<h1></button>
                
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add product</h5>
            <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <form action="{{route('Products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
               

                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" name="pname"style="background-color: #2A3038" value="" required=""  class="form-control" >
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Image:</label>
                <input type="file" name="image" style="background-color: #2A3038"required="" class="form-control" >
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Image 1:</label>
                <input type="file" name="image1" multiple   style="background-color: #2A3038"  class="form-control" >
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Image 2:</label>
                <input type="file" name="image2" style="background-color: #2A3038" class="form-control" >
              </div>

              <div class="form-group">
                <label  class="col-form-label">Product Catagory::</label>
                {{-- <input type="text"name="Pcatagory"style="background-color: #2A3038" required="" class="form-control" > --}}
                <select class="form-control" required="" style="background-color: #2A3038" name="Pcatagory">
                  @foreach ($catagory as $catagory )
                    <option value=" {{$catagory->id}}">
                         {{$catagory->CatagoryName}}
                    </option>  
                  @endforeach  
                </select> <br>
              </div>

              <div class="form-group">
                <label  class="col-form-label">Product brand::</label>
                {{-- <input type="text"name="Pcatagory"style="background-color: #2A3038" required="" class="form-control" > --}}
                <select class="form-control" required="" style="background-color: #2A3038" name="Pbrand">
                  @foreach ($brand as $brand )
                    <option value=" {{$brand->id}}">
                         {{$brand->Name}}
                    </option>  
                  @endforeach  
                </select> <br>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Quantity:</label>
                <input type="number" required="" name="PQuntty" style="background-color: #2A3038" class="form-control" >
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Price:</label>
                <input type="number"  required=""   style="background-color: #2A3038"  name="Pprice"required="" class="form-control" >

              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">status:</label>
                <input type="checkbox" name="status"style="background-color: #2A3038" value=""  class="form-control" >
                <label for="recipient-name" class="col-form-label">trending:</label>
                <input type="checkbox" name="trending"style="background-color: #2A3038" value=""   class="form-control" >
              </div>
             
              {{-- <div class="form-group">
                <label for="recipient-name" class="col-form-label">meta titel:</label>
                <input type="text" name="meta titel"style="background-color: #2A3038"   class="form-control" >
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">meta_keyword:</label>
                <textarea rows="2"  class="form-control" name="meta_keyword"></textarea>
              </div> --}}
              
              <div class="form-group">
                <label for="message-text" class="col-form-label">description:</label>
                <textarea rows="4" class="form-control" name="Pdescripton" required></textarea>
              </div>
           
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" style="background-color: green; border-color:white;height: 40px;"> Add Product</button>
            <button type="button" class="btn btn-danger" style="background-color: red; border-color:white;height: 40px;" data-dismiss="modal">Close</button>
         
          </div>
        </form>
        </div>
      </div>
    </div>
    </div> 