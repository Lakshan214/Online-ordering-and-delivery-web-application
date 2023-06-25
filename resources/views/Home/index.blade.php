










<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('Home.links')
</head>

<body>
    <!-- Page Preloder -->
    @include('Home.navbar')
    <!-- Humberger End -->
    @include('sweetalert::alert')
    <!-- Header Section Begin -->
    @include('Home.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @include('Home.hero')
    <!-- Hero Section End -->
   
    
    <!-- Categories Section Begin -->
    @include('Home.catagory.brand')
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

   
    
    <center>
        <form action="{{Route('review.store')}}" method="POST">
            @csrf
            <p><label style="font-size: 30px;color:#0C2B4B;" >Review of our Service:</label></p>
            <textarea id="w3review" name="review" rows="8" cols="100" placeholder="Enter your review" required ></textarea>
            <br>
            <a class="btn btn-success" ><input type="submit"  value="Submit"></a>
          </form>
        </center>
    <!-- Footer Section Begin -->
    @include('Home.footer')
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')


</body>

</html>




























