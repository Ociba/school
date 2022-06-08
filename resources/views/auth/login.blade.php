{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}
<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @include('frontlayouts.title')
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        @include('frontlayouts.css')
    </head>
    <body>
        
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header>
                   @include('frontlayouts.menu2')   
                </header>
                <!--End of Header Area-->
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">Login</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="/">Home</a></li>
                                            <li>Login</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Login Register section start-->
                <div class="login-register section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 co-12"></div>
                            <!--Login Form Start-->
                            <div class="col-lg-6 col-12">
                                <div class="customer-login-register">
                                    <div class="form-register-title text-center">
                                        <h2>Login</h2>
                                    </div>
                                    <div class="login-form">
                                    <x-jet-validation-errors class="mb-4" />

                                        @if (session('status'))
                                            <div class="mb-4 font-medium text-sm text-green-600">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('login') }}">
                                             @csrf
                                            <div class="form-fild">
                                                <p><label>Username or email address <span class="required">*</span></label></p>
                                                <input id="email" type="email" name="email" :value="old('email')" required autofocus>
                                            </div>
                                            <div class="form-fild">
                                                <p><label>Password <span class="required">*</span></label></p>
                                                <input id="password"  type="password" name="password" required autocomplete="current-password">
                                            </div>
                                            <div class="login-submit text-center">
                                                <!--<button type="submit" class="button-default">Login</button>-->
                                                <button type="submit" class="button-default">Login</button>
                                                <label>
                                                    <input class="checkbox" id="remember_me" name="remember" type="checkbox">
                                                    <span>Remember me</span>
                                                </label>
                                            </div>
                                            <div class="lost-password text-center">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">Lost your password?</a>
                                            @endif
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Login Form End-->
                            <!--Register Form Start-->
                            <div class="col-lg-3 col-12">
                            </div>
                            <!--Register Form End-->
                        </div>
                    </div>
                </div>
                <!--Login Register section end-->
                <!--Newsletter Area Start-->
               @include('frontlayouts.subscribe')
                <!--End of Newsletter Area-->
                <!--Footer Widget Area Start-->
                @include('frontlayouts.footer')
                <!--End of Footer Area-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        <!-- Color Switcher -->
        @include('frontlayouts.color-switcher')
        <!-- Color Switcher end -->	
        
        @include('frontlayouts.javascript')
    </body>
</html>
