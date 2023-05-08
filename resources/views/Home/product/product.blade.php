

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



    <!-- Banner Begin -->
  
    
           
       
           <h2 style="text-align: center;color:#7fad39;"><b>{{$catagory->CatagoryName}}</b></h2><br>
       
         <div class="row featured__filter">
            @forelse ($product as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges a">
                
                <div class="featured__item">
                    
                     <div class="featured__item__pic set-bg" data-setbg="/product/{{$product->image}}"> 
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="{{route('link.singlepage',$product->id)}}"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{$product->Name}}</a></h6>
                        <h5>Rs.{{$product->Price}}.00</h5>
                    </div>
                </div>
            </div>
                @empty

          
           
            
        </div>
         {{-- @endforeach  --}}
    </div>
</section>

    <h5 class="featured__item__text" style="color: red;text-align: center;">No Products Available for {{$catagory->CatagoryName}}</h5><br><br><br>



   @endforelse
    

    <!-- Footer Section Begin -->
  
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')


</body>

</html>