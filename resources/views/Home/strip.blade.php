


  
<!DOCTYPE html>
<html>
<head>
    @include('Home.links')
    <title>BeautyHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
      <!-- Page Preloder -->
      @include('Home.navbar')
      <!-- Humberger End -->
      <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> BeutyHub@gmail.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            @if (Route::has('login'))
                               
    
                            @auth
                            <div class="header__top__right__auth">
                            
                              <x-app-layout>
                             </x-app-layout>
                            </div>
                    
                            @else
                            <div class="header__top__right__auth">
                                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                            </div>
        
                            @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ url('/index') }}"><img style="height: 70px; width:200px;" src="{{asset('img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ url('/index') }}">Home</a></li>
                            
                            {{-- <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li> --}}
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="{{route('link.showCart')}}"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    
    
    
    
    
    
    
    
    
    
    
    
    
      <!-- Header Section Begin -->
   
      <!-- Header Section End -->
<div class="container">
    
    <h1 style="text-align: center;"><b>Proceed To Payment</b></h1><br>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                        <h3 class="panel-title" >Payment Details</h3>
                </div>
                <div class="panel-body">
    
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
    
                    <form  action="{{ route('order.striPost') }}" method="post" >
                        @csrf
                      
                        <div class="form-row row">
                          <div class="col-xs-12 form-group required">
                            <label class="control-label">Name on Card</label>
                            <input class="form-control" size="4" type="text"  required>
                          </div>
                        </div>
                      
                        <div class="form-row row">
                          <div class="col-xs-12 form-group card required">
                            <label class="control-label">Card Number</label>
                            <input class="form-control card-number" size="20" type="text"  required>
                          </div>
                        </div>
                      
                        <div class="form-row row">
                          <div class="col-xs-12 col-md-4 form-group cvc required">
                            <label class="control-label">CVC</label>
                            <input class="form-control card-cvc" placeholder="ex. 311" size="4" type="text" id="card-cvc" required>
                          </div>
                          <div class="col-xs-12 col-md-4 form-group expiration required">
                            <label class="control-label">Expiration Month</label>
                            <input class="form-control card-expiry-month" placeholder="MM" size="2" min="1"  max="12" type="text" id="card-expiry-month" required>
                          </div>
                          <div class="col-xs-12 col-md-4 form-group expiration required">
                            <label class="control-label">Expiration Year</label>
                            <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text" id="card-expiry-year" required>
                          </div>
                        </div>
                      
                        <div class="row">
                          <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block" style="color: black;" type="submit" onclick="isFormValid()" >Pay Now</button>
                          </div>
                        </div>
                      
                      </form>
                      
                      
                      
                      
                </div>
            </div>        
        </div>
    </div>
        
</div>

@include('Home.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->

@include('Home.js')
    
</body>
    
{{-- <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
   
    
       
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
    
});
</script> --}}

<script>
    // Form validation
    document.getElementById('payment-form').addEventListener('submit', function(event) {
      // Check if all required fields are filled
      if (!isFormValid()) {
        event.preventDefault(); // Prevent form submission if validation fails
      }
    });
  
    function isFormValid() {
      var cardName = document.getElementById('card-name').value;
      var cardNumber = document.getElementById('card-number').value;
      var cardCVC = document.getElementById('card-cvc').value;
      var cardExpiryMonth = document.getElementById('card-expiry-month').value;
      var cardExpiryYear = document.getElementById('card-expiry-year').value;
  
      // Perform validation on each field
      if (cardName.trim() === 'test') {
        alert('Please enter the name on the card.');
        return false;
      }
  
      if (cardNumber.trim() === '4242424242424242') {
        alert('Please enter the card number.');
        return false;
      }
  
      if (cardCVC.trim() === '') {
        alert('Please enter the CVC.');
        return false;
      }
  
      if (cardExpiryMonth.trim() === '') {
        alert('Please enter the expiration month.');
        return false;
      }
  
      if (cardExpiryYear.trim() >= '2023') {
        alert('Please enter the expiration year.');
        return false;
      }
  
      return true; // Form is valid
    }
    <script>
</html>