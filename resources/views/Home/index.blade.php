<!DOCTYPE html>
<html lang="en">

  <head>
 
    
    @include('Home.links')
    
    <!-- ***** Header Area Start ***** -->
    @include('Home.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    @include('Home.banner')
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    @include('Home.product')

     <!-- ***** Explore Area Starts ***** -->
     @include('Home.Exlore')
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Ends ***** -->
    
    @include('Home.socal')
    <!-- ***** Subscribe Area Starts ***** -->
    @include('Home.subcrib')
    <!-- ***** Subscribe Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    @include('Home.footer')
    

   @include('Home.js')

  </body>
</html>