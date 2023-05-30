
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
    <div class="container" >
      
      
        <div class="checkout__form">
            <h4>Sign In</h4>
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
                        <button  class="btn btn-primary btn-lg" type="submit" style="color: black;"> Register</button>
                    </div>
                  
                </form>

        </div>  
    </div>   

<section>
    <br><br>
    <!-- Footer Section Begin -->
    @include('Home.footer')
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')



    <!--End of Tawk.to Script-->

</body>

</html>





















