<div style="margin-top: 100px ">
   
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Product  add   successful!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   @endif 


    <button style="height: 40px; " type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><h1>Add Product<h1></button>
                
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <form action="{{route('Products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" name="pname"style="background-color: #2A3038" required=""  class="form-control" >
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Image:</label>
                <input type="file" name="image" style="background-color: #2A3038"required="" class="form-control" >
              </div>

              <div class="form-group">
                <label  class="col-form-label">Product Catagory::</label>
                <input type="text"name="Pcatagory"style="background-color: #2A3038" required="" class="form-control" >
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
                <label for="message-text" class="col-form-label">description:</label>
                <textarea class="form-control"required=""  name="Pdescripton"></textarea>
              </div>
           
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success"> Add Product</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          
          </div>
        </form>
        </div>
      </div>
    </div>
    </div> 