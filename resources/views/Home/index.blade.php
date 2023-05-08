










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




























