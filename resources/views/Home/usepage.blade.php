<!DOCTYPE html>
<html lang="en">

@include('Home.links')

    </head>
    
    <body>
    
        @include('Home.header')
    <!-- ***** Header Area End ***** -->
   
    <!-- ***** Main Banner ***** -->
    
         @include('Home.banner')
    <!-- ***** Main Banner ***** -->

    <!-- ***** product ***** -->
    @include('Home.product')
   

    <!-- ***** Explore Area Starts ***** -->
    @include('Home.Exlore')
    <!-- ***** Explore Area Ends ***** -->
   
    <!-- ***** Social Area Starts ***** -->
    @include('Home.socal')
    <!-- ***** Social Area Ends ***** -->
      
    <!-- ***** Subscribe Area Starts ***** -->
    @include('Home.subcrib')
    <!-- ***** Subscribe Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    @include('Home.footer')
    

    <!-- jQuery -->
    @include('Home.js')

  </body>
</html>