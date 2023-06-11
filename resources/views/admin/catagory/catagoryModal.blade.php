<div style="margin-top: 100px ">
   
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Product  add   successful!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   @endif 


    <button style="height: 40px; background-color: #0090e7; " type="button" class="btn btn-primary"   data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><h1>Add catagory<h1></button>
                
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Catagory</h5>
            <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <form action="{{route('Catagory.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
               

                <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" name="CatagoryName"style="background-color: #2A3038" value="" required=""  class="form-control" >
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">image:</label>
                <input type="file" name="image"style="background-color: #2A3038" value="" required=""  class="form-control" >
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">slug:</label>
                <input type="text" name="slug"style="background-color: #2A3038" value="" required=""  class="form-control" >
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">status:</label>
                <input type="checkbox" name="status"style="background-color: #2A3038" value="1"  class="form-control" >
                <label for="recipient-name" class="col-form-label">populer:</label>
                <input type="checkbox" name="populer"style="background-color: #2A3038" value="1"  class="form-control" >
              </div>
             
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">meta titel:</label>
                <input type="text" name="meta titel"style="background-color: #2A3038" value="" class="form-control" >
              </div>

              


              
           
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" style="background-color: green;border-color:white;height: 40px;"> Add Product</button>
            <button type="button" class="btn btn-danger" style="background-color: red;border-color:white;height: 40px;"data-dismiss="modal">Close</button>
         
          </div>
        </form>
        </div>
      </div>
    </div>
    </div> 