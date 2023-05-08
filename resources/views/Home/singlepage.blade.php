










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
                        
                        <a href="#" class="primary-btn ">ADD TO CARD</a>
                        
                        
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
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p></p>
                                </div>
                            </div>
                           
                           
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


</body>

</html>
























































{{-- <!DOCTYPE html>
<html lang="en">

  <head>
 
    
    @include('Home.links')
    
    <!-- ***** Header Area Start ***** -->
    @include('Home.header')
    <!-- ***** Header Area End ***** -->
    @include('Home.socal')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                    <img style="height: 600px;" src="/product/{{$product->image}}" alt="">
                    {{-- <img  style="height: 600px; width:800px;"  src="/product/{{$product->image1}}" alt="">
                    <img  style="height: 600px; width:800px;"  src="/product/{{$product->image2}}" alt=""> 
                    
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner"  >
                          <div class="carousel-item active">
                            <img style="height: 300px;width: 400px;"src="/product/{{$product->image2}}" class="d-block w-10" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img style="height: 300px;width: 400px;" src="/product/{{$product->image}}" class="d-block w-10" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img style="height: 300px;width: 400px;"src="/product/{{$product->image1}}" class="d-block w-10" alt="...">
                          </div>
                        </div>
                      </div>
     

                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>{{$product->Name}}</h4>
                    <span>RS.{{$product->Price}}.00</span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>{{$product->Descrtiptton}}</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p>Helps strengthen your dermal support structure for smoother, younger-looking skin.</p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>No. of Orders</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <button onclick="decrementCounter()" class="minus">-</button><input  type="text" id="counter" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><button onclick="incrementCounter()" class="minus">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4>Total: RS.210.00</h4>
                        <div class="main-border-button"><a href="#">Add To Cart</a></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Footer Start ***** -->
    @include('Home.footer')
    

   @include('Home.js')

	<script>
		function incrementCounter() {
			var counter = document.getElementById("counter");
			var currentValue = parseInt(counter.value);
			counter.value = currentValue + 1;
		}

        function decrementCounter()
        {
			var counter = document.getElementById("counter");
			var currentValue = parseInt(counter.value);
			counter.value = currentValue - 1;
		}
	</script>
<


  </body>
</html> --}}