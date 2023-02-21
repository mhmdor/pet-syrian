{{-- @extends('layouts.app') --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login-Pet Syrian</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!--===============================================================================================-->
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/animals/Copy+of+Copy+of+Untitled.jpg') }}" />
</head>

<body>








    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('assets/img/animals/logo3.png') }}" alt="IMG">
                </div>
                <form method="POST" class="login100-form validate-form" action="{{ route('login') }}">
                    @csrf
                    <span style="font-family: 'Courier New', Courier, monospace;font-weight:bold;"
                        class="login100-form-title">
                        {{ __('messages.login') }}
                    </span>

                    <div class="wrap-form-control1 validate-input" data-validate="Valid phone is required">
                        <input id="phone" class="form-control1 @error('phone') is-invalid @enderror"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type="number" maxlength="10" name="phone" placeholder="{{ __('messages.mobile') }}"
                            value="{{ old('phone') }}" required autocomplete="phone">
                        <span class="focus-form-control1"></span>
                        <span class="symbol-form-control1">
                            <i style="font-size: 30px" class="fa fa-mobile" aria-hidden="true"></i>
                        </span>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="wrap-form-control1 validate-input" data-validate="Password is required">
                        <input id="password" class="form-control1 @error('password') is-invalid @enderror"
                            type="password" name="password" placeholder="{{ __('messages.password') }}" required
                            autocomplete="current-password">
                        <span class="focus-form-control1"></span>
                        <span class="symbol-form-control1">
                            <i style="font-size: 25px" class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <div class="col-md-3 offset-md-2">

                        </div>
                    </div>

                    

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            {{ __('messages.login') }}
                        </button>



                        <b>
                            <div class="text-center p-t-40">
                                <a class="txt2" href="\register">
                                    {{ __('messages.createa') }}
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                            </div>
                            <b>
                                <div class="text-center p-t-20">
                                    <a class="txt2"
                                        href="\">
                                        {{ __('messages.home') }}
                                        <i class="fa
                                        fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                    </a>
                                </div>
                </form>
            </div>
        </div>
    </div>



    <!--===============================================================================================-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
