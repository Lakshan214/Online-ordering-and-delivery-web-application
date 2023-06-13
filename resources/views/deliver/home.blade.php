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
     
    
            
            @include('deliver.table')
    
      
          </footer>
         
        </div>
     
      </div>
 
 
   
    @include('admin.js')
  </body>
</html>