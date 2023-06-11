<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.links')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.saidebar')
      <!-- partial -->
     
      @include('admin.navbar')
          <footer class="footer" style="width: 100%;">
            
            <div style="margin-top: 100px ">
            
            </div>
              <div class="card">
                <div class="card-body">
                  <form action="" method="GET">
                    <div class="row">
                      <div class="col-md-3">
                        <label>Filter by Date</label>
                        <input type="date" name="date" style="color: black; value="{{date('y-m-d')}}" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <label>Filter by status</label>
                        <select name="status" class="form-select" style="color: black;">
                          <option value=""style="color: black;">select status</option>
                          <option value="prosesing" style="color: black;">prosesing</option>
                          <option value="completed"style="color: black;">completed</option>
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
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($order as $item)
         
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->pmode }}</td>
                            <td><a href="{{route('order.admin',$item->id)}}" class="btn btn-primary " >View</a></td>
                            <td> <select class="form-control" required="" style="background-color: #2A3038" name="Pcatagory">
                              @foreach ($user as $user )
                                <option value="">
                                     {{$user->name}}
                                </option>  
                              @endforeach  
                            </select></td>  
                          </tr>
                    
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