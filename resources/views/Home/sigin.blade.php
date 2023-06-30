
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
                       
                        
                        {{-- <div class="checkout__input">
                            {{-- <p>user type<span>*</span></p> 
                            <input  type="number" min="0" Max="3" name="userType" :value="0" autocomplete="userType"   >
                         
                        </div> --}}
                       
                        
                                {{-- <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="number" name="phone" :value="old('phone')" required autocomplete="phone">
                                </div> --}}
                           
                            
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input  type="email" name="email" :value="old('email')" required autocomplete="username">
                                </div>
                            </div>
                        </div>
                        
                        <div class="checkout__input">
                            <p>Account Password<span>*</span></p>
                            <input  type="password" name="password"   pattern=".{8,}" title="Password must be at least 8 characters long and contain at least one letter and one number"required autocomplete="new-password">
                        </div>
                        <div class="checkout__input">
                            <p>Conform Account Password<span>*</span></p>
                            <input type="password" pattern=".{8,}" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <button  class="btn btn-primary btn-lg" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" onclick="return validatePassword()" type="submit" style="color: black;"> Register</button>
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



<script>
    function validatePassword() {
        var password = document.getElementsByName("password")[0].value;
        var confirmPassword = document.getElementsByName("password_confirmation")[0].value;

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>


















