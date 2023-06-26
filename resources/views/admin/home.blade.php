<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.links')
  </head>
  <body>
    <div class="container-scroller">
      @include('sweetalert::alert')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.saidebar')
      <!-- partial -->
     
      @include('admin.navbar')

     
          <footer class="footer" style="width: 100%;">
            
            <div style="margin-top: 100px ">
              @include('admin.info')
            </div>
              <div class="card">
                <div class="card-body">
                  <form action="" method="GET">
                    <div class="row">
                      <div class="col-md-3">
                        <label>Filter by Date</label>
                        <input type="date" name="date" style="color: black;" value="{{Request::get('date') ?? date('y-m-d')}}"class="form-control">
                      </div>
                      <div class="col-md-3">
                        <label>Filter by status</label>
                        <select name="status" class="form-select" style="color: black;">
                          <option value=""style="color: black;">select status</option>
                          <option value="prosesing "{{Request::get('status')== 'prosesing'?'selected':''}} style="color: black;">prosesing</option>
                          <option value="completed "{{Request::get('status')== 'completed'?'selected':''}}style="color: black;">completed</option>
                        </select>
                        <button type="submit" class=" btn btn-primary " style="padding: 10px;">Serch</button>
                      </div></div>
                  </form>
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
                          <th scope="col">Delivery Man</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($order as $item)
         
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td> @switch($item->status )
                              @case($item->status=="pending")
                              <button type="button" class="btn btn-outline-success">{{ $item->status }}</button>
                              {{-- <a  href="{{route('order.cancel',$item->id)}}"  class="btn btn-danger">cancel</a> --}}
                                  @break
                              @case($item->status=="Prosesing")
                              <button type="button" class="btn btn-outline-info">{{ $item->status }}</button>
                                  @break
                             @case($item->status=="packed")
                             <button type="button" class="btn btn-outline-primary">{{ $item->status }}</button>
                                 @break
                            @case($item->status=="Delivering")
                            <button type="button" class="btn btn-outline-secondary">{{ $item->status }}</button>
                       
                                 @break
                             @case($item->status=="Delivered")
                            <button type="button" class="btn btn-outline-warning">{{ $item->status }}</button>
                            
                                      @break
                              @default
                              <button type="button" class="btn btn-outline-danger">{{ $item->status }}</button>
                          @endswitch</td>
                            <td>{{ $item->pmode }}</td>
                            <td><a href="{{route('order.admin',$item->id)}}" class="btn btn-primary " >View</a></td>
                            <td>

                              @switch($item->status )
                              @case($item->status=="pending")
                              <a  href="{{route('order.prosesing',$item->id)}}"  class="btn btn-info">conform</a>
                              <a  href="{{route('order.cancel',$item->id)}}"  class="btn btn-danger">cancel</a>
                                  @break
                              @case($item->status=="Prosesing")
                              <a  href="{{route('order.packing',$item->id)}}"   class="btn btn-success">packed</a>
                                  @break
                             @case($item->status=="packed")
                              @if($item->delveryId)
                              @if($item->delivery)
                              <td>{{$item['delivery']['name']}}</td> 
                              @else
                           
                              @endif
                              
                              
                              @else
                              
                              <form action="{{ route('order.SelectDelivery', $item->id) }}" method="POST">
                                  @csrf
                                  <select class="form-control" required="" style="background-color: #2A3038" name="delivery_id">
                                    <?php
                                    $users = App\Models\User::where('userType', 2)->get();
                                    ?>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                   </select>
                               <Td> <button type="submit" class="btn btn-outline-warning">Add </button></Td>
                            </form>
                            @endif
                                 @break
                        
                       
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
         
        </div>
     
      </div>
 
 
   
    @include('admin.js')
  </body>
</html>