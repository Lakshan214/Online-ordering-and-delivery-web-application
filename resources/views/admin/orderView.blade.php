<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.links')
    @include('sweetalert::alert')

    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    
      <!-- partial -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="/admin/assets/images/logo.png"  style="height: 70px; width:200px;"  alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="/admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/redirect') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Back</span>
            </a>
          </li>
          
          
        </ul>
      </nav>

      @include('admin.navbar')
      
          <footer class="footer" style="width: 100%;">
            <div style="margin-top: 100px ">
    
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Prodouct Table</h4>
                  <p class="card-description"> <code>products</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped" >
                      <thead>
                        <tr>
                            <tr>
               
                                <th scope="col">Castrmoer Details</th>
                                <th scope="col">Order Details</th>
                              </tr>
                            </thead>
                            @foreach ($order as $item)
                            <tbody>
                              <tr>
                                
                              
                                <td  style="font-size:20px;" ><h2>1. Name:<b>{{ $item->name }}</b></h2>
                                    <h3>2. Email:<b>{{ $item->email }}</b></h3>
                                    <h3>3. Phone:<b>{{ $item->phone }}</b></h3>
                                    <h3>4. Address:<b>{{ $item->address }},</b></h3>
                                   <h3>   <b>{{ $item->City }},{{ $item->Locatontype }}</b></h3>
                                </td>
                                <td style="font-size:20px;">
                                    <h3>1. Order Id:<b>{{ $item->id }}</b></h3>
                                    <h3>2. Order Created date:<b> {{ $item->created_at }}</b></h3>
                                    <h3>3. Payment Mode: <b>{{ $item->pmode }}</b></h3>
                                    <h3>4. Status:<b> {{ $item->status }}</b></h3>
                
                                </td>
                                @endforeach
                              </tr>
                            
                        </tr>
                      </thead>
                     </tbody>
                        
                    </table>
            
                    <br><br>

                    <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Order</h4>
                          <p class="card-description"> <code>All Order</code>
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

                                <?php $total=0; ?>
                                @foreach ($orderItem as $key=> $item)
                                <tbody>
                                  <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td>{{ $item->Name}}</td>
                                    <td>
                                      <img style="width: 50px; height: 50px;" src="/product/{{$item->img}}">
                                    </td>
                                    <td>{{ $item->quntity}}</td>
                                    <td>Rs.{{ $item->Price}}</td>
                                    <td>Rs.{{ $item->Price* $item->quntity}}</td>
                                  </tr>
                                  <?php $total+=$item->Price* $item->quntity; ?>
                                </tbody>
                                @endforeach
                              </table>
                              <h3 style="text-align: center; font-size:30px; color:#8d2f2f;"><b>Total:Rs.{{$total}}.00</b></h3> 
                              <br><br>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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