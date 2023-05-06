
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Men's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
     
    
    <section class="section" id="men">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-12">
                <div class="men-item-carousel">
                  
                    <div class="owl-men-item owl-carousel">
                        @foreach($product as  $product)

                         @if ($product->Catagory_id==9)

                        
                        <div class="item">
                            
                            <div class="thumb">
                                 
                                <div class="hover-content">
                                    
                                    <ul>
                                        <li><a href="{{ route('link.singlepage',$product->id)}}"><i class="fa fa-eye"></i></a></li>
                                         <li><a href=""><i class="fa fa-star"></i></a></li>
                                         <li><a href="{{ route('link.singlepage',$product->id)}}"><i class="fa fa-shopping-cart"></i></a></li> 
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
                            
                        
                        
                        @endif
                        @endforeach
                    </div>
                        
                        
                    </div>
                </div>
                
            </div>
           
        </div>
    </div>
    
</section>


<!-- ***** Men Area Ends ***** -->

<!-- ***** Women Area Starts ***** -->
<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h2>Women's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    
    
        <div class="container">
            <div class="row">
               
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                      
                        <div class="owl-men-item owl-carousel">
                             
                            @foreach($product3 as  $phto)
                            @if ($phto->Catagory_id==8)
                            <div class="item">
                                
                                <div class="thumb">
                                     
                                    <div class="hover-content">
                                        
                                        <ul>
                                            <li><a href="{{ route('link.singlepage',$phto->id)}}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href=""><i class="fa fa-star"></i></a></li>
                                            <li><a href="{{ route('link.singlepage',$phto->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                   
                                    <img src="/product/{{$phto->image}}" alt="">
                                   
                                </div>
                                <div class="down-content">
                                    <h4>{{$phto->Name}}</h4>
                                    <span>RS.{{$phto->Price}}.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                
                            </div>
                             @endif 
                            @endforeach
                            
                        </div>
                            
                            
                            
                        </div>
                    </div>
                    
                </div>
               
            </div>
        </div>
        
    </section>

<!-- ***** Women Area Ends ***** -->

<!-- ***** Kids Area Starts ***** -->

{{-- <section class="section" id="kids">--}}
    <section class="section" id="kids">
     <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Kid's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    
        <div class="container">
            <div class="row">
               
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                      
                        <div class="owl-men-item owl-carousel">
                            @foreach($product1 as  $product1)
                            @if ($product1->Catagory_id==2)
                            <div class="item">
                                
                                <div class="thumb">
                                     
                                    <div class="hover-content">
                                        
                                        <ul>
                                            <li><a href="{{ route('link.singlepage',$product1->id)}}"><i class="fa fa-eye"></i></a></li> 
                                            <li><a href=""><i class="fa fa-star"></i></a></li>
                                            <li><a href="{{ route('link.singlepage',$product1->id)}}"><i class="fa fa-shopping-cart"></i></a></li> 
                                        </ul>
                                    </div>
                                   
                                    <img src="/product/{{$product1->image}}" alt="">
                                   
                                </div>
                                <div class="down-content">
                                    <h4>{{$product1->Name}}</h4>
                                    <span>RS.{{$product1->Price}}.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                
                            </div>
                            @endif
                            @endforeach
                        </div>
                            
                            
                            
                        </div>
                    </div>
                    
                </div>
               
            </div>
        </div>
        
    </section> 

    
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Accesoris</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>

        <section class="section" id="men">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                      
                        <div class="owl-men-item owl-carousel">
                            @foreach($product4 as  $ase)
                            @if ($ase->Catagory_id==10)
                            <div class="item">
                                
                                <div class="thumb">
                                     
                                    <div class="hover-content">
                                        
                                        <ul>
                                            <li><a href="{{ route('link.singlepage',$ase->id)}}"><i class="fa fa-eye"></i></a></li>
                                            <li><a href=""><i class="fa fa-star"></i></a></li>
                                            <li><a href="{{ route('link.singlepage',$ase->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                   
                                    <img src="/product/{{$ase->image}}" alt="">
                                   
                                </div>
                                <div class="down-content">
                                    <h4>{{$ase->Name}}</h4>
                                    <span>RS.{{$ase->Price}}.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                
                            </div>

                            @endif
                            @endforeach 
                        </div>
                        
                            
                            
                        </div>
                    </div>
                    
                </div>
               
            </div>
        </div>
        
    </section> 