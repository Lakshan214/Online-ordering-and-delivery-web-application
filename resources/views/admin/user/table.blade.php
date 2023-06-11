<div  style="margin-top: 50px; margin-left:100px" class="col-lg-10 grid-margin stretch-card">



    <div class="card">
      <div class="card-body">
        <h4 class="card-title">UserTable</h4>
        <p class="card-description"> <code>User</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped" >
            <thead>
              <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Email </th> 
                <th>phone </th>
                <th>UserType</th>
                <th>Action</th>                                 
              </tr>
            </thead>
            <tbody>

                @foreach($user as $item)
                <tr>
             
                    
                   <td>{{ $item->id }}</td>
                   <td>{{ $item->name}}</td>
                   <td>{{ $item->email }}</td>
                   <td>{{ $item->phone }}</td>
                   <td >
                        @if($item->userType == 1)
                        <div class="font-size-20">
                            <span class="btn btn-outline-danger">Admin</span>
                        </div>
                        @elseif($item->userType == 2)
                        <div class="font-size-20">
                            <span class="btn btn-outline-warning">Delevery</span>
                        </div>
                        @else
                        <div class="font-size-20" >
                            <span class="btn btn-outline-success">User</span>
                        </div>
                        @endif

                    </td>

                   <td width="30%">
            
                

                  
            <a href="{{ route('user.delete',$item->id) }}" class="btn btn-danger " title="Delete Data" id="delete">
                <i class="mdi mdi-delete"></i></a>

          

                   </td>

                </tr>
                 @endforeach
           
            
            </tbody>
            <div>
             
            </div>
          </table>
          {{$user  ->links()}}
        </div>
      </div>
    </div>
  </div>

  