<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.links')

    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
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
                  
         
          
        
          
        </ul>
      </nav>
      <!-- partial -->
     
      @include('admin.navbar')
          <footer class="footer" style="width: 100%;">
            <div style="margin-top: 100px ">
            <div class="row">
          
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0"></h3>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">{{$total_processing}}</p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-danger">
                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Pending order</h6>
                    </div>
                  </div>
                </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"></h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">{{$total_delivered}}</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Delivered Order</h6>
                  </div>
                </div>
              </div>
          
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"></h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">{{$total_process}}</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Order processing </h6>
                  </div>
                </div>
              </div>
            </div>
           @include('deliver.table')
    
      
          </footer>
         
        </div>
     
      </div>
 
 
   
    @include('admin.js')
  </body>
</html>