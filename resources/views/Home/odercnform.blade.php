










<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('Home.links')
</head>

<body>
    @include('sweetalert::alert')
    <!-- Page Preloder -->
    @include('Home.navbar')
    <!-- Humberger End -->
  
    <!-- Header Section Begin -->
    @include('Home.header')
    <!-- Header Section End -->
  <br><br>
    

     <center>
           <h1><b>Dear valued customer,</b></h1>
             <br>
            <h3>Thank you for choosing our shop for your recent purchase! We greatly appreciate your support. We would love to hear your feedback on the product you purchased. </h3>
            <br>
            <a href="{{ route('order.View') }}"class="btn btn-warning">View Your Order</a>
     </center>
   
    <br><br>

    <!-- Footer Section Begin -->
    @include('Home.footer')
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')


    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/645fca2f74285f0ec46b47fd/1h0b2rjia';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>
























































