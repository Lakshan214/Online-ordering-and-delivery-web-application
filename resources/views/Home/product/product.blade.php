

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

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                  
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{route('product.product-search')}}" method="GET" enctype="multipart/form-data">
                              
                                <input type="text" placeholder="What do yo u need?" name="search">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    

    <!-- Banner Begin -->
  
    
           
       
           <h2 style="text-align: center;color:#7fad39;font-size:30px;"><b >{{$catagory->CatagoryName}}</b></h2><br>
       
         <div class="row featured__filter">
            @forelse ($products as $product)
            @if($product->status  == 1)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges a">
                
                <div class="featured__item">
                    
                     <div class="featured__item__pic set-bg" data-setbg="/product/{{$product->image}}"> 
                        <ul class="featured__item__pic__hover">
                            <li><a href="{{route('wishlist.store',$product->id)}}"><i class="fa fa-heart"></i></a></li>
                            <li><a href="{{route('link.singlepage',$product->id)}}"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="{{route('link.singlepage',$product->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{$product->Name}}</a></h6>
                        <h5>Rs.{{$product->Price}}.00</h5>
                    </div>
                </div>
            </div>
                
        
        @endif
            @empty
           
            
        </div>
         {{-- @endforeach  --}}
    </div>
   
</section>

    <h5 class="featured__item__text" style="color: red;text-align: center;">
        ALL ITEMS IN THIS CATEGORY ARE SOLD OUT. </h5><br><br><br>



   @endforelse
    
   <div style="margin-top: 350px;">
    {{$products->links()}}
   </div>
    <!-- Footer Section Begin -->
  
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')


</body>

</html>