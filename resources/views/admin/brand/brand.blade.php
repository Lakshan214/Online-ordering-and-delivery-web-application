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
     
    
            
  
            @include('admin.brand.modal')
            @include('admin.brand.table')
      
          </footer>
         
        </div>
     
      </div>
 
 
   
    @include('admin.js')
  </body>
</html>