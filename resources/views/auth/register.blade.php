
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
                                                       @empty
                                <h3 style="color: red">Oder is empty</h3>
                            @endforelse
                            <?php $total+= $item->total ?>
                            <div class="checkout__order__subtotal">Subtotal <span>Rs.{{$total}}.00</span></div>
                            <div class="checkout__order__total">Total <span>Rs.{{$total}}.00</span></div>

                            <div class="checkout__input__checkbox">
                                <label for="acc-or">
                                    Create an account?
                                    <input type="checkbox" id="acc-or">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="checkout__input__checkbox">
                                <label for="payment">
                                    Check Payment
                                    <input type="checkbox" id="payment">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="paypal">
                                    Paypal
                                    <input type="checkbox" id="paypal">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <a href="{{route('order.orderSave')}}" class="site-btn">PLACE ORDER</a>
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




















{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone number') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autocomplete="phone" />
            </div>
            <div class="mt-4">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
            </div>
            <div class="mt-4">
                <x-label for="userType" value="{{ __('User Type') }}" />
                <x-input id="userType" class="block mt-1 w-full" type="number" min="1" Max="3" name="userType" :value="old('userType')" autocomplete="userType" />
            </div>
            

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
