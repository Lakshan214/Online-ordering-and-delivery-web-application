










<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('Home.links')
</head>

<body>
    <!-- Page Preloder -->
    @include('Home.navbar')
    <!-- Humberger End -->
  
    <!-- Header Section Begin -->
    @include('Home.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @include('Home.hero')
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    @include('Home.catagory.category')
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    {{-- @include('Home.product.product') --}}
    <!-- Featured Section End -->

    <!-- Banner Begin -->
  
    @include('Home.banner')

   
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    @include('Home.product.latastProduct')
    <!-- Latest Product Section End -->

   
    

    <!-- Footer Section Begin -->
    @include('Home.footer')
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')


</body>

</html>




























{{-- <!DOCTYPE html>
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
</html> --}}