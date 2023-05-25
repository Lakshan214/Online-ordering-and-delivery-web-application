
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

<section class="checkout spad">
    <div class="container">
      
      
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Name<span>*</span></p>
                                    <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" name="address" :value="old('address')" required autocomplete="address">
                         
                        </div>
                        <div class="checkout__input">
                            <p>user type<span>*</span></p>
                            <input  type="number" min="0" Max="3" name="userType" :value="old('userType')" autocomplete="userType">
                         
                        </div>
                       
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="number" name="phone" :value="old('phone')" required autocomplete="phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input  type="email" name="email" :value="old('email')" required autocomplete="username">
                                </div>
                            </div>
                        </div>
                       
                        <div class="checkout__input">
                            <p>Account Password<span>*</span></p>
                            <input  type="password" name="password" required autocomplete="new-password">
                        </div>
                        <div class="checkout__input">
                            <p>Conform Account Password<span>*</span></p>
                            <input type="password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <button  class="btn btn-primary btn-lg" type="submit"> Register</button>
                    </div>
                  
                </form>

                    <div class="col-lg-4 col-md-6">
                 
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <?php $total=0; ?>
                            @forelse ($cart as $item)
                                
                           
                            <ul>
                                <li>{{$item->Name}} <span> Rs.{{$item->total}}.00</span></li>
                                
                            </ul>
                            <?php $total+= $item->total ?>
                           
                           
                            <div class="checkout__order__subtotal">Subtotal <span>Rs.{{$total}}.00</span></div>
                            <div class="checkout__order__total">Total <span>Rs.{{$total}}.00</span></div>
                            <a href="{{url('/paymentMode',$item->id)}}" class="site-btn " style="background-color: blue;"> Cash on delivery</a><br><br>
                            @empty
                                <h3 style="color: red">Oder is empty</h3>
                            @endforelse
                            @if($total>0)
                            <a href="{{route('order.stripView',$total)}}" class="site-btn">Online Payment</a>
                            
                            @else
                             
                            
                            @endif
                        </div>
                       
                    </div>
                </div>
            
        </div>
    </div>
</section>


    <!-- Footer Section Begin -->
    @include('Home.footer')
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')



    <!--End of Tawk.to Script-->

</body>

</html>





















