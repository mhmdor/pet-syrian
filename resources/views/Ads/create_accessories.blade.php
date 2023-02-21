<!DOCTYPE html>
<html lang="en">

<head>
    <title>New ADs</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('index1/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('index1/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('index1/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('index1/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('index1/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('index1/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('index1/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('index1/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>


    <div class="container-contact100">

        <div class="wrap-contact100">
            @if (\Session::has('message'))

            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">ADS Add Successfuly</h3>
                            
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h5 class="modal-title">{!! \Session::get('message') !!}</h5>
                            <div class="wrap-contact100-form-btn">
                                <div class="contact100-form-bgbtn"></div>
                                <a href="{{ route('home') }}" class="contact100-form-btn">
                                    <span>
                                        Return Home
                                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div style="height: 10px"></div>
                            <div class="wrap-contact100-form-btn">
                                <div class="contact100-form-bgbtn"></div>
                                <a href="{{ route('ads.create') }}" class="contact100-form-btn">
                                    <span>
                                        New ADS
                                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
                {{-- <div id="mydiv" class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('message') !!}</li>
                    </ul>
                </div> --}}
            @endif
            <form method="POST" class="contact100-form validate-form" action="{{ route('ads.storeAccessories') }} "
                enctype="multipart/form-data">
                @csrf

                <span class="contact100-form-title">
                {{__('messages.addacc')}}    
                </span>

                <input type="text" name="type" value="Accessories" hidden>


                <div class="wrap-input100 input100-select">
                    <span class="label-input100">{{ __('messages.anmcat') }}</span>
                    <div>
                        <select class="selection-2 " name="slug" required>
                            <option disabled selected value>{{ __('messages.chanmcat') }}</option>
                            <option value="Cat">{{ __('messages.cat') }}</option>
                            <option value="Dog">{{ __('messages.dog') }}</option>
                            <option value="Bird">{{ __('messages.bird') }}</option>
                            <option value="Horse">{{ __('messages.horse') }}</option>
                            <option value="Others">{{ __('messages.Others') }}</option>
                        </select>
                        @error('type')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Title is required">
                    <span class="label-input100">{{__('messages.titads')}}</span>
                    <input class="input100 " type="text" name="title" placeholder="{{__('messages.titads')}}">
                    @error('title')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="price is required">
                    <span class="label-input100">{{ __('messages.price') }}</span>
                    <input class="input100 " type="number" name="price" placeholder="{{ __('messages.prices') }}">
                    @error('Price')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>

               



                <div class="wrap-input100 input100-select">
                    <span class="label-input100">{{ __('messages.scity') }}</span>
                    <div>
                        <select class="selection-2 " name="city" required>
                            <option disabled selected value>{{ __('messages.scity') }}</option>
                            <option value="Damascus">{{ __('messages.Damascus') }}</option>
                            <option value="Rif Dimashqq">{{ __('messages.RifDimashqq') }}</option>
                            <option value="Aleppo">{{ __('messages.Aleppo') }}</option>
                            <option value="Homs">{{ __('messages.Homs') }}</option>
                            <option value="Latakia">{{ __('messages.Latakia') }}</option>
                            <option value="Suwayda">{{ __('messages.Suwayda') }}</option>
                            <option value="Daraa">{{ __('messages.Daraa') }}</option>
                            <option value="Hama">{{ __('messages.Hama') }}</option>
                            <option value="Raqqah">{{ __('messages.Raqqah') }}</option>
                            <option value="Dayr az_zawr">{{ __('messages.Dayraz_zawr') }}</option>
                            <option value="Idlib">{{ __('messages.Idlib') }}</option>
                            <option value="Alhasakah">{{ __('messages.Alhasakah') }}</option>
                            <option value="Quneitera">{{ __('messages.Quneitera') }}</option>
                            <option value="Suwayda">{{ __('messages.Suwayda') }}</option>

                        </select>
                        @error('city')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <span class="focus-input100"></span>
                </div>





                <div class="wrap-input100 validate-input" data-validate="photo is required">
                    <span class="label-input100">{{ __('messages.mphoto') }}</span>
                    <input class="input100 " type="file" name="photo" placeholder="photo ">
                    @error('photo')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 " data-validate="photo is required">
                    <span class="label-input100">{{ __('messages.ophoto') }}</span>
                    <input class="input100 " type="file" name="images[]" placeholder="photo " multiple>
                    @error('photo')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>



                <div class="wrap-input100 validate-input" data-validate="Description is required">
                    <span class="label-input100">{{ __('messages.Description') }}</span>
                    <textarea class="input100" name="Description" placeholder=" {{ __('messages.Descriptionh') }}"></textarea>
                    @error('Description')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button type="submit" class="contact100-form-btn">
                            <span>
                                {{ __('messages.addnew') }}
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <a style="color: white" href="{{ route('home') }}" class="contact100-form-btn">
                            <span>
                                {{ __('messages.rethome') }}
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script>
        setTimeout(function() {
            $('#mydiv').fadeOut('fast');
        }, 3000);
    </script>

</body>

</html>
