@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register-Pet</title>
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


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('assets/img/animals/logo3.png') }}" alt="IMG">
                    <br>
                    <br>
                    <br>
                    <br>
                    <b>
                        <div class="text-center p-t-5">By clicking on Register, you accept and agree to Pet Syrian Terms & Conditions</div>
                        <div class="text-center p-t-5">
                            <a class="txt2" data-toggle="modal" data-target="#exampleModalLong">
                                <p class="text-danger">
                                    Pet Syrian Terms & Conditions</p>
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </b>
                    
                </div>



                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Pet Syrian Terms & Conditions
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                                         </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>



                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">

                    @csrf
                    <span style="font-family: 'Courier New', Courier, monospace;font-weight:bold;"
                        class="login100-form-title">
                        {{ __('messages.register') }}
                    </span>

                    <div style="fonw" class="wrap-form-control1 validate-input" data-validate="Valid Name is Empty">
                        <input type="text" id="firstname" name="firstname"
                            placeholder="{{ __('messages.fname') }}" value="{{ old('firstname') }}"
                            class="form-control1 @error('firstname') is-invalid @enderror" required
                            autocomplete="firstname">
                        <span class="focus-form-control1"></span>
                        <span class="symbol-form-control1">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>

                        </span>
                        @error('firstname')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>




                    <div class="wrap-form-control1 validate-input" data-validate="Valid Name is Empty">
                        <input id="lastname" type="text" placeholder="{{ __('messages.lname') }}" name="lastname"
                            value="{{ old('lastname') }}"
                            class="form-control1 @error('lastname') is-invalid @enderror" required
                            autocomplete="lastname">
                        <span class="focus-form-control1"></span>
                        <span class="symbol-form-control1">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>

                        </span>

                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="wrap-form-control1 validate-input" data-validate="Valid mobile is Empty">
                        <input
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type="number" maxlength="10" id="mobile" name="mobile" value="{{ old('mobile') }}"
                            placeholder="{{ __('messages.mobile') }}"
                            class="form-control1 @error('mobile')
is-invalid
@enderror" required
                            autocomplete="mobile">
                        <span class="focus-form-control1"></span>
                        <span class="symbol-form-control1">
                            <i style="font-size:25px" class="fa fa-mobile" aria-hidden="true"></i>

                        </span>
                        @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="wrap-form-control1 validate-input"
                        data-validate="Valid email is required: ex@abc.xyz">
                        <input placeholder="{{ __('messages.email') }}" id="email" type="email"
                            name="email" value="{{ old('email') }}"
                            class="form-control1 @error('email') is-invalid @enderror" required autocomplete="email">
                        <span class="focus-form-control1"></span>
                        <span class="symbol-form-control1">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>





                    <div class="wrap-form-control1 validate-input" data-validate="Password is required">
                        <input type="password" placeholder="{{ __('messages.password') }}" id="password"
                            name="password" class=" form-control1  @error('password') is-invalid @enderror" required
                            autocomplete="new-password">
                        <span class="focus-form-control1"></span>
                        <span class="symbol-form-control1">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>


                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="wrap-form-control1 validate-input" data-validate="Password is required">
                        <input type="password" placeholder="{{ __('messages.cpassword') }}" id="password-confirm"
                            type="password" class="form-control1" name="password_confirmation" required
                            autocomplete="new-password">
                        <span class="focus-form-control1"></span>
                        <span class="symbol-form-control1">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            {{ __('messages.register') }}
                        </button>
                    </div>


                    <b>
                        <div class="text-center p-t-5">
                            <a class="txt2" href="\login">
                                {{ __('messages.login') }}
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
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
