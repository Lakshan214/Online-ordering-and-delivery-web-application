








<section class="latest-product spad">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    
                        
                   
                    <div class="latest-product__slider owl-carousel">
                        @foreach ( $product as $product)

                        @if ($product->status>0)

                       
                        <div class="latest-prdouct__slider__item">
                            <a href="{{route('link.singlepage',$product->id)}}" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="/product/{{$product->image}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{$product->Name}}</h6>
                                    <span>RS.{{$product->Price}}.00</span>
                                </div>
                            </a>
                            
                        </div>
                       
                        @endif
                        @endforeach 
                    </div>
                   
                </div>
            </div>
           
           








            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        @foreach ( $product1 as $product1)
                        @if ($product1->trending>0)
                        <div class="latest-prdouct__slider__item">
                            <a href="{{route('link.singlepage',$product1->id)}}" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="/product/{{$product1->image}}"  alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{$product1->Name}}</h6>
                                    <span>RS.{{$product1->Price}}.00</span>
                                </div>
                            </a>
                            
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>






            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        @foreach ( $product2 as $product1)
                        @if ($product1->trending==0 or $product->status==0)
                        <div class="latest-prdouct__slider__item">
                            <a href="{{route('link.singlepage',$product1->id)}}" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="/product/{{$product1->image}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{$product1->Name}}</h6>
                                    <span>RS.{{$product1->Price}}.00</span>
                                </div>
                            </a>
                            
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



















{{-- <!DOCTYPE html>
<html lang="en">

  <head>
 
    
    @include('Home.links')
    
    <!-- ***** Header Area Start ***** -->
    @include('Home.header')
    <!-- ***** Header Area End ***** -->
    @include('Home.socal')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($product as  $product)
                <div class="col-lg-4">
                    
                    <div class="item">
                        
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="/product/{{$product->image}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{$product->Name}}</h4>
                            <span>RS.{{$product->Price}}.00</span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            
                        </div>
                      
                    </div>
                    
                </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Footer Start ***** -->
    @include('Home.footer')
    

   @include('Home.js')

  </body>
</html> --}}