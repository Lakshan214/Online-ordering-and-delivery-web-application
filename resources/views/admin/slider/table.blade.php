<div  style="margin-top: 50px; margin-left:100px" class="col-lg-10 grid-margin stretch-card">



    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Slider Table</h4>
        <p class="card-description"> <code>slider</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped" >
            <thead>
              <tr>
                <th>Slider Image </th>
                <th>Status</th>
                <th>Action</th>                                   
              </tr>
            </thead>
            <tbody>
                @foreach($sliders as $item)
                <tr>

              <td><img src="/product/{{$item->sliderImg}}" style="width: 50px; height: 40px; "> </td>
                   
                   <td >
                        @if($item->status == 1)
                        <div class="font-size-20">
                            <span class="badge bg-success">Active</span>
                        </div>
                        @else
                        <div class="font-size-20" >
                            <span class="badge bg-danger">inActive</span>
                        </div>
                        @endif

                    </td>

                   <td width="30%">
            

            <a href="{{ route('slider.delete',$item->id) }}" class="btn btn-danger " title="Delete Data" id="delete">
                <i class="mdi mdi-delete"></i></a>

           @if($item->status == 1)
            <a href="{{ route('slider.inactive',$item->id) }}" id="Inactive"  class="btn btn-danger " title="Inactive Now"><i class="mdi mdi-arrow-left-bold-circle-outline"></i> </a>
                @else
            <a href="{{ route('slider.active',$item->id) }}" id="Active"  class="btn btn-success " title="Active Now"><i class="mdi mdi-arrow-right-bold-circle-outline"></i> </a>
                @endif

                   </td>

                </tr>
                 @endforeach
           
            
            </tbody>
            <div>
             
            </div>
          </table>
          {{-- {{$Catagorys ->links()}} --}}
        </div>
      </div>
    </div>
  </div>

  