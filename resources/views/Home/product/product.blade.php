
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

    <!-- Hero Section Begin -->
 




      
        {{-- @foreach($product as  $product) --}}
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges a">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/product/{{$product->image}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Crab Pool Security</a></h6>
                        <h5>$30.00</h5>
                    </div>
                </div>
            </div>
            
        </div>
        {{-- @endforeach --}}
    </div>
</section>

@include('Home.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->

@include('Home.js')

</body>

</html>