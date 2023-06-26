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
    
            
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Review Table</h4>
                  <p class="card-description"> <code>Riview</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped" >
                        <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">usreID</th>
                              <th scope="col">Review</th>
                              <th scope="col">Status</th>
                              <th scope="col" >Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($review as $items )
                              
                           
                            <tr>
                              <th scope="row">{{$items->id}}</th>
                              @if($items->user)
                              <td>{{$items['user']['name']}}</td>
                              @else
                             <td> No name</td>
                              @endif
      
                              <td>  <textarea id="w3review" name="w3review" style="background-color: rgba(14, 13, 13, 0.616);color: rgb(240, 237, 233);" rows="3" cols="70" placeholder="{{$items->review}}"></textarea></td>
                              <td>
                                  @if($items->status == 1)
                                  <div class="font-size-20">
                                      <span class="badge bg-success">Active</span>
                                  </div>
                                  @else
                                  <div class="font-size-20" >
                                      <span class="badge bg-danger">inActive</span>
                                  </div>
                                  @endif
                              </td>
                              
                              <td>
                                  <a href="{{ route('review.delete',$items->id) }}" class="btn btn-danger " title="Delete Data" id="delete">
                                      <i class="mdi mdi-delete"></i></a>
                      
                                   @if($items->status == 1)
                                  <a href="{{ route('review.inactive',$items->id) }}" id="Inactive"  class="btn btn-danger " title="Inactive Now"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> </a>
                                      @else
                                  <a href="{{ route('review.active',$items->id) }}" id="Active"  class="btn btn-success " title="Active Now"><i class="mdi mdi-arrow-right-bold-circle-outline"></i> </a>
                                      @endif 
                       
                              </td>
                            </tr>
                            @endforeach  
                          </tbody>
                        </table>
                  </div>
                </div>
            </div>
        <div>
    
      
          </footer>
         
        </div>
     
      </div>
 
 
   
    @include('admin.js')
  </body>
</html>