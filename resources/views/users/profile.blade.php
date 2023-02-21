@php
$genderArray = ['Male', 'Female'];
$cityArray = ['Damascus', 'Homs', 'Latakia', 'Aleppo', 'Tartous', 'Daraa', 'Rif Dimshqq', 'Hama', 'Raqqah', 'Dayr az_zawr', 'Idlib', 'Alhasakah', 'Quneitra', 'Suwayda'];
$typeArray = ['Cat', 'Dog', 'Bird', 'Horse', 'Breeding', 'Accessories', 'Activity', 'Others'];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Profile</title>
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
            @if (count($errors) > 0)
                @foreach ($errors->all() as $item)
                    <div class="alert alert-danger" role="alert">
                        {{ $item }}
                    </div>
                @endforeach

            @endif
            @if (\Session::has('message'))
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Profile Edit Successfuly</h3>

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


                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <form method="POST" class="contact100-form validate-form" action="{{ route('profile.update') }}"
                enctype="multipart/form-data">
                @csrf


                <span class="contact100-form-title">
                    {{__('messages.editpro')}}
                </span>


                @if ($user->photo != null)
                    <div class="d-flex align-items-start py-3 border-bottom"> <img
                            src="{{ asset('upload/photo/user/' . $user->photo) }}" class="img" alt="">
                    @else
                        <div class="d-flex align-items-start py-3 border-bottom"> <img
                                src="{{ asset('upload/photo/user/user.jpg') }}" class="img" alt="">
                @endif

                <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                    <p>Accepted file type Less than 1MB</p>
                    <div class="container1">
                        <div class="panel">
                            <div class="button_outer">
                                <div class="btn_upload">
                                    <input type="file" id="upload_file" class="form-control-file" name="photo">
                                    {{ __('messages.chimage') }}
                                </div>
                                <div class="processing_bar"></div>
                                <div class="success_box"></div>
                            </div>
                        </div>
                        <div class="error_msg"></div>
                        <div class="uploaded_file_view" id="uploaded_view">
                            <span class="file_remove">X</span>
                        </div>
                    </div>
                </div>

        </div>






        <div class="wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">{{__('messages.fname')}}</span>
            <input class="input100 " type="text" name="firstname" placeholder="{{__('messages.fname')}}"
                value="{{ $user->firstname }}">
            @error('firstname')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            <span class="focus-input100"></span>
        </div>



        <div class="wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">{{__('messages.lname')}}</span>
            <input class="input100 " type="text" name="lastname" placeholder="{{__('messages.lname')}}"
                value="{{ $user->lastname }}">
            @error('lastname')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            <span class="focus-input100"></span>
        </div>



        <div class="wrap-input100 ">
            <span class="label-input100">{{__('messages.email')}}</span>
            <input class="input100 " type="text" name="email" placeholder="{{__('messages.email')}}" value="{{ $user->email }}"
                readonly>
            @error('email')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            <span class="focus-input100"></span>
        </div>


        <div class="wrap-input100 validate-input" data-validate="Mobile is required">
            <span class="label-input100">{{ __('messages.mobile') }}</span>
            <input class="input100 " type="text" name="mobile" placeholder="{{ __('messages.mobile') }}" value="{{ $user->mobile }}"
                readonly>
            @error('mobile')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            <span class="focus-input100"></span>
        </div>




        <div class="wrap-input100 input100-select">
            <span class="label-input100">{{ __('messages.gender') }}</span>
            <div>
                <select class="selection-2 " name="gender" required>
                    @foreach ($genderArray as $item)
                        <option value="{{ $item }}" {{ $user->gender == $item ? 'selected' : '' }}>
                            {{ $item }}</option>
                    @endforeach

                </select>
                @error('city')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <span class="focus-input100"></span>
        </div>



        <div class="wrap-input100 input100-select">
            <span class="label-input100">{{ __('messages.city') }}</span>
            <div>
                <select class="selection-2 " name="city" required>
                    @foreach ($cityArray as $item)
                        <option value="{{ $item }}" {{ $user->city == $item ? 'selected' : '' }}>
                            {{ $item }}</option>
                    @endforeach

                </select>
                @error('city')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <span class="focus-input100"></span>
        </div>






        <div class="container-contact100-form-btn">
            <div class="wrap-contact100-form-btn">
                <div class="contact100-form-bgbtn"></div>
                <button type="submit" class="contact100-form-btn">
                    <span>
                        {{ __('messages.edpro') }}
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
                        {{ __('messages.home') }}
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
    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>
    <script>
        var btnUpload = $("#upload_file"),
            btnOuter = $(".button_outer");
        btnUpload.on("change", function(e) {
            var ext = btnUpload.val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                $(".error_msg").text("Not an Image...");
            } else {
                $(".error_msg").text("");
                btnOuter.addClass("file_uploading");
                setTimeout(function() {
                    btnOuter.addClass("file_uploaded");
                }, 3000);
                var uploadedFile = URL.createObjectURL(e.target.files[0]);
                setTimeout(function() {
                    $("#uploaded_view").append('<img src="' + uploadedFile + '" />').addClass("show");
                }, 3500);
            }
        });
        $(".file_remove").on("click", function(e) {
            $("#uploaded_view").removeClass("show");
            $("#uploaded_view").find("img").remove();
            btnOuter.removeClass("file_uploading");
            btnOuter.removeClass("file_uploaded");
        });
    </script>
</body>

</html>
