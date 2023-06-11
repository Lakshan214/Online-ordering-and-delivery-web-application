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
                 <th>Status </th>
                <th> Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($products as $key=> $product)
              <tr>
                <td class="py-1">
                    {{++$key}}
                </td>
                <td> {{$product->Name}}</td>
                <td>
                    <img style="width: 50px; height: 50px;" src="/product/{{$product->image}}">
                </td>
                @if($product->catagory)
                <td> {{$product['catagory']['CatagoryName']}}</td>
                @else
                   <td>No Cataory Add </td>
                @endif   
                <td>{{$product->quantity}} </td>
                <td>{{$product->Price}} </td>
                <td>
                  @if($product->status  == 1)
                  <div class="font-size-20">
                   <span class="badge bg-success">Active</span>
                  </div>
                  @else
                  <div class="font-size-20">
                      <span class="badge bg-danger">inActive</span>
                  </div>
                  @endif
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
                    @if($product->status == 1)
                    <a href="{{ route('product.inactive',$product->id) }}" id="Inactive" class="btn btn-danger" title="Inactive Now"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> </a>
                    @else
                    <a href="{{ route('product.active',$product->id) }}" id="Active" class="btn btn-success" title="Active Now"><i class="mdi mdi-arrow-right-bold-circle-outline"></i> </a>
                    @endif
                              
                </td>

              </tr>
              @endforeach 
            
            </tbody>
          </table>
          {{$products->links()}}
        </div>
      </div>
    </div>
  </div>