
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



<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product"><h3><b>Your Cart</b></h3></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <?php $total=0; ?>
                                @foreach ($carts as $item)

                               
                                <td class="shoping__cart__item">
                                    <img style="width: 80px; height: 80px;" src="/product/{{$item->image}}" alt="">
                                    <h5>{{$item->Name}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    Rs.{{$item->Price}}.00
                                </td>
                                <form action="{{Route('cart.UpdateCart',$item->id)}} "method="POST">
                                    @csrf
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                      
                                        <div class="pro-qty">
                                           <input type="text" value=" {{$item->quntity}} "min="1" name="quntity">
                                        </div>
                                    </div>
                                     
                                </td>
                                <td class="shoping__cart__total">
                                    Rs.{{$item->total}} 
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a href="{{Route('cart.deleteCart',$item->id)}}">  <span class="icon_close"></span></a>
    
                                </td>
                                
                            </tr>
                            <?php $total+= $item->total ?>

                            @endforeach 
                       
                       
                        </tbody>
                        
                    </table>
                
                    {{$carts->links()}}
                
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                  
                    <button class="primary-btn cart-btn cart-btn-right"> <span class="icon_loading"></span>
                        Update Cart</button>
                    </form>   
                 <a href="" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                </div>
            </div>
            @if (0<$total)
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Total <span>Rs.{{$total}}</span></li>
                    </ul>
                   
                   
                
                        {{-- <a href="{{route('order.orderSave')}}"  class="primary-btn">PROCEED TO CHECKOUT</a> --}}
                        
                        <a href="{{ route('login') }}"  class="primary-btn">PROCEED TO CHECKOUT</a>
                    @else
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Cart Total</h5>
                            <ul>
                                <li>Total <span>Rs.00</span></li>
                            </ul>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@include('Home.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->

@include('Home.js')


</body>

</html>