


  
<!DOCTYPE html>
<html>
<head>
    @include('Home.links')
    <title>BeautyHub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
}

.payment-form {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
}

h2 {
  text-align: center;
}

.form-group {
  margin-bottom: 10px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

</style>
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
     
        <div class="payment-form">
          <h2>Payment Gateway</h2>
          <form action="{{route('order.striPost')}}"  method="POST" onsubmit="return validateForm()">
            @csrf
            <div class="form-group">
              <label for="card-number">Card Number</label>
              <input type="text" id="card-number" placeholder="Enter your card number">
            </div>
            <div class="form-group">
              <label for="expiry-date">Expiry Date</label>
              <input type="text" id="expiry-date" placeholder="MM/YY">
            </div>
            <div class="form-group">
              <label for="cvv">CVV</label>
              <input type="text" id="cvv" placeholder="Enter CVV">
            </div>
            <div class="form-group">
              <label for="name">Cardholder Name</label>
              <input type="text" id="name" placeholder="Enter cardholder name">
            </div>
            <button type="submit">Pay Now</button>
          </form>
        </div>
      <br><br>
      
@include('Home.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->

@include('Home.js')
<script> function validateForm() {
    var cardNumber = document.getElementById("card-number").value;
    var expiryDate = document.getElementById("expiry-date").value;
    var cvv = document.getElementById("cvv").value;
    var cardholderName = document.getElementById("name").value;
  
    if (cardNumber === "" || expiryDate === "" || cvv === "" || cardholderName === "") {
      alert("Please fill in all the fields.");
      return false;
    }
  
    if (!/^\d{16}$/.test(cardNumber)) {
      alert("Invalid card number. Please enter a 16-digit number.");
      return false;
    }
  
    var currentYear = new Date().getFullYear().toString().slice(-2);
var currentMonth = new Date().getMonth() + 1;

if (!/^(0[1-9]|1[0-2])\/(2[3-9]|[3-9]\d|\d{3,})$/.test(expiryDate)) {
  alert("Invalid expiry date. ");
  return false;
}

var inputYear = expiryDate.split('/')[1];
var inputMonth = expiryDate.split('/')[0];

if (inputYear === currentYear && inputMonth < currentMonth) {
  alert("Invalid expiry date. The entered expiry date has already passed.");
  return false;
}

  
    if (!/^\d{3}$/.test(cvv)) {
      alert("Invalid CVV. Please enter a 3-digit number.");
      return false;
    }
  
    return true;
  }
  </script>
    
</body>
</html>
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


