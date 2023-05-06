
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body style="color: #dc3545;">
    
    

    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img style="height: 500px;margin-top: 80px; " src="img/login.jpg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
             
                
                
              <form style="margin-top: 100px;" method="POST" action="{{ route('login') }}">

               

               
               
                @csrf
                
                <a href="{{ url('/') }}"><img style="height: 70px; width:200px;align-content: center; " src="img/logo.png" alt=""></a><br>
                <x-validation-errors  />
                @if (session('status'))
                <div  style="color: red;" >
               {{ session('status') }}
                 </div>
                 @endif
                <div class="divider d-flex align-items-center my-4">
                  
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="email"class="form-control form-control-lg"
                    placeholder="Enter a valid email address" name="email" :value="old('email')" required autofocus autocomplete="username"/>
                  <label class="form-label" for="form3Example3" style="color: black;">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3" >
                  <input type="password" id="password" class="form-control form-control-lg"
                    placeholder="Enter password" name="password" required autocomplete="current-password"/>
                  <label class="form-label" for="form3Example4" style="color: black;">Password</label>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" id="remember_me" name="remember" />
                    <label class="form-check-label" for="form2Example3" style="color: black;">
                      Remember me
                    </label>
                  </div>
                  @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="text-body">Forgot password?</a>
                </div>
                @endif
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" style="background-color: #7fad39" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0" style="color: black;">Don't have an account? <a href="#!"
                      class="link-danger">Register</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
 
          <!-- Copyright -->
      
          <!-- Right -->
       
      </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

























{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        

      

        <form method="POST" action="{{ route('login') }}">
            
         @csrf
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
