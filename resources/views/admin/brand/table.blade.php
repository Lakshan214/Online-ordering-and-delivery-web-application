<div  style="margin-top: 50px; margin-left:100px" class="col-lg-10 grid-margin stretch-card">



    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Catagory Table</h4>
        <p class="card-description"> <code>Catagories</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped" >
            <thead>
              <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Image </th>
                <th> Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($brand as $key=> $brand)
              <tr>
                <td class="py-1">
                  {{$brand->id}}
                </td>
                <td> {{$brand->Name}}</td>
                <td>   <img style="width: 50px; height: 50px;" src="/product/{{$brand->img}}"></td>
                 <td>
               <form action="{{ route('Brand.destroy',$brand->id) }}" method="post">

                      @csrf
                      @method('DELETE')
                   <button type="submit" class="btn btn-danger" style="background-color:red"  class="col-sm-6 col-md-4 col-lg-3">
                    <i  class="mdi mdi-delete"></i> 
                   </button> 
              
                  </form>
                  
                </td>

              </tr>
              @endforeach 
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>