<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Categories </span>
                    </div>
                    <ul>
                        
                         
                    @foreach ( $catagory2 as  $catagory2)
                    <li><a href="{{route('link.product',$catagory2->slug)}} ">{{$catagory2->CatagoryName}}</a></li>
                       
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{route('product.product-search')}}" method="GET" enctype="multipart/form-data">
                            <div class="hero__search__categories">
                                All Categories
                               
                            </div>
                            <input type="text" placeholder="What do yo u need?" name="search">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>0772738668</h5>
                            <span>support 8.00am-10.00pm time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg"  style="height: 500px; "  data-setbg="img/hero/banner.jpg">
                    <div class="hero__text">
                        <span>BeautyHub</span>
                        <h2 style="color: azure">We Are BeautyHub</h2>
                        <p style="color:rgb(217, 255, 0)">Happy Shoping...</p>
                        <a href="{{('/')}}" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>