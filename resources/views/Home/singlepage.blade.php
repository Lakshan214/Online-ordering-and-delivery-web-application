










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

    

     

    

    <!-- Breadcrumb Section Begin -->
   
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="/product/{{$product->image}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="/product/{{$product->image}}"
                                src="/product/{{$product->image}}" alt="">
                            <img data-imgbigurl="/product/{{$product->image}}"
                                src="/product/{{$product->image1}}" alt="">
                            <img data-imgbigurl="/product/{{$product->image2}}"
                                src="/product/{{$product->image2}}" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$product->Name}}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            
                        </div>
                        <div class="product__details__price">RS.{{$product->Price}}.00</div>
                        <p>{{$product->Descrtiptton}}</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>

                        @if ($product->quantity>0)
                        
                        <a href="{{route('link.addCart',$product->id)}}" class="primary-btn ">ADD TO CARD</a>
                        
                        
                        @endif
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Availability</b> 
                                @if ($product->quantity>0)
                                   <span>In Stock</span></li>
                                @else
                                <span style="color: red">No Products Available </span></li>
                        
                                @endif
                               
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                        <a  target="_blank" href="https://wa.me/0772738668?text=Helo..%20interested%20in%20your%20car%20for%20sale"> <img src="{{asset('img/th.jpeg')}}" style="height: 50px; "></a>
                    </div>
                </div>
               
                

                          
                           <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    


   
    

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
























































