<div  style="margin-top: 50px" class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Prodouct Table</h4>
        <p class="card-description"> <code>products</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Image</th>
                <th> Catagory </th>
                <th> Quantity</th>
                <th> Price</th>
                <th> Descrtiptton</th>
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
                <td>{{$product->Descrtiptton}}</td>
                <td>
                    {{-- <a href="" class="btn btn-success "><i class="las la-edit"></i></a> --}}
                    <a href="{{route('Products.destroy',$product->id)}}" class="btn btn-danger">delete</a>
                </td>

              </tr>
              @endforeach 
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>