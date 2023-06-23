








<section class="latest-product spad">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4 font-size:30px;>Latest Products</h4>
                    
                        
                   
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



















