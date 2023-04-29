<div  style="margin-top: 50px" class="col-lg-12 grid-margin stretch-card">



    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Prodouct Table</h4>
        <p class="card-description"> <code>products</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped" >
            <thead>
              <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Image</th>
                <th> Catagory </th>
                <th> Quantity</th>
                <th> Price</th>
                <th style="width:80%;"> Descrtiptton</th>
                <th> Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($product as $key=> $product)
              <tr>
                <td class="py-1">
                    {{++$key}}
                </td>
                <td> {{$product->Name}}</td>
                <td>
                    <img style="width: 50px; height: 50px;" src="/product/{{$product->image}}">
                </td>
                <td> {{$product->Catagory}}</td>
                <td>{{$product->quantity}} </td>
                <td>{{$product->Price}} </td>
                <td ><textarea style="height: 70px;"  class="form-control" placeholder="{{$product->Descrtiptton}}"></textarea>
                  </td>
                <td>
                  
                    <form action="{{ route('Products.destroy',$product->id) }}" method="post">

                    <a href="{{ route('Products.edit',$product->id) }}"  class="btn btn-success " ><i class="mdi mdi-checkbox-marked-outline" style=""></i></a><td>
                      

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