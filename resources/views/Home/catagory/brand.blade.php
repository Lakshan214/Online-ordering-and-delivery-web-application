<section class="categories">
    <div class="container">
        <div class="row">
           
            <div class="categories__slider owl-carousel">
                @foreach ( $catagory1 as  $catagory1)
                <div class="col-lg-3">
                    
                   
                    
                    <div class="categories__item set-bg" data-setbg="/product/{{$catagory1->image}}" >
                        
                        <h5><a href="{{route('link.product',$catagory1->slug)}} ">{{$catagory1->CatagoryName}} </a></h5>
                       
                    </div>
                   
                </div>
                @endforeach 
               
            </div>
            
        </div>
    </div>
</section><br><br>

<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 style="font-size:30px;">Our Brand</h2>
                </div>
               
            </div>
        </div>

     
        <div class="row featured__filter">
            @foreach ( $Brands as $product1)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
              
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/product/{{$product1->img}}">
                        
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('link.brand',$product1->slug)}}">{{$product1->Name}}</a></h6>
                    </div>
                </div>
              
            </div>
            @endforeach
        </div>
        {{$Brands->links()}}
    </div>
</section>
