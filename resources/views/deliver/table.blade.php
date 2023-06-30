
            
    
    
    </div>
      <div class="card">
        <div class="card-body">
          
          <h4 class="card-title">Order</h4>
          
          <p class="card-description"> <code>All Orde</code>
          </p>
          <div class="table-responsive">
            <table class="table table-striped" >
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Status Msg</th>
                  <th scope="col">Payment method</th>
                  <th scope="col">Action</th>
                  <th scope="col">Delivery Action</th>
                 
                </tr>
              </thead>

              <tbody>
                @foreach ($order as $item)
 
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                      @switch($item->status )
                    @case($item->status=="Delivering")
                    <button type="button" class="btn btn-outline-secondary">{{ $item->status }}</button>
               
                         @break
                     @case($item->status=="Delivered")
                    <button type="button" class="btn btn-outline-warning">{{ $item->status }}</button>
                    
                              @break
                      @default
                      <button type="button" class="btn btn-outline-danger">{{ $item->status }}</button>
                  @endswitch
                    <td>{{ $item->pmode }} </td>
                  
                    <td><a href="{{route('order.viewDelivery',$item->id)}}" class="btn btn-primary " >View</a></td>
                   <td>
                    @switch($item->status )
                       @case($item->status=="packed")
                       <a  href="{{route('order.Delivering',$item->id)}}"   class="btn btn-secondary">Conform</a>
                           @break
                      @case($item->status=="Delivering")
                      <a  href="{{route('order.Delivered',$item->id)}}"   class="btn btn-warning">HandOver</a>
                 
                           @break
                        @default
                            
                    @endswitch
                                       
                      

                      
                    </td>
            @endforeach
        
              </tbody>
            </table>
            {{$order->links()}}
          </div>
        </div>
      
      </div>
    </div>
    
  </footer>