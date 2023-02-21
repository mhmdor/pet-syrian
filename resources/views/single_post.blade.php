<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Animals Details</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/animals/logo4.png') }}" rel="icon">
    <link href="{{ asset('assets/img/animals/logo4.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" type="text/css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" type="text/css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{ route('home') }}">Syrian Pets <img
                        src="{{ asset('assets/img/animals/logo4.png') }}" class="img-fluid" alt=""></a></h1>


            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>

                    <li class="dropdown"><a href=""><span>{{ __('messages.language') }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>






                    <li class="dropdown"><a href=""><span>{{ __('messages.Categories') }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a
                                    href="{{ route('ads.alltype', ['type' => 'Cat']) }}">{{ __('messages.cat') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('ads.alltype', ['type' => 'Dog']) }}">{{ __('messages.dog') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('ads.alltype', ['type' => 'Bird']) }}">{{ __('messages.bird') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('ads.alltype', ['type' => 'Horse']) }}">{{ __('messages.horse') }}</a>
                            </li>



                            <li><a
                                    href="{{ route('ads.alltype', ['type' => 'Others']) }}">{{ __('messages.Others') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li><a
                            href="{{ route('ads.alltype', ['type' => 'Accessories']) }}">{{ __('messages.Accessories') }}</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('messages.Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('messages.Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown"><a id="navbarDropdown" class="" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}

                                <span class="caret"></span>
                                <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a a class="dropdown-item"
                                        href="{{ route('profile') }}">{{ __('messages.MyProfile') }}</a>
                                    <a href="{{ route('ads.myADS') }}"
                                        class="dropdown-item">{{ __('messages.MyADs') }}
                                    </a>
                                    <a href="{{ route('ads.getfav') }}"
                                        class="dropdown-item">{{ __('messages.MyFAV') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                               document.getElementById('logout-form').submit();">
                                        {{ __('messages.Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </li>




                    @endguest
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a type="button" class="get-started-btn scrollto" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                {{ __('messages.newads') }}
            </a>
        </div>
    </header>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Select Type Of ADs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <a style="background: #10a01c;color:rgb(255, 255, 255);margin-bottom:12px;" class="btn  btn-lg"
                        href="{{ route('ads.create') }}">{{ __('messages.newadsanimals') }}</a>
                    <a style="background: #10a01c;color:rgb(255, 255, 255)" class="btn  btn-lg"
                        href="{{ route('ads.createAccessories') }}">{{ __('messages.newadsacss') }}</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>





    <!-- End Header -->


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="\">{{ __('messages.home') }}</a></li>
                    <li>{{ __('messages.' . $ads->type) }}</li>
                </ol>
                <h2>{{ __('messages.' . $ads->type) }}</h2>

            </div>
        </section><!-- End Breadcrumbs -->



        @if (\Session::has('message'))
<div class="alert
                            alert-success text-center" id="success-alert">
                            <strong>Success ! </strong> Your Comments Added Success.
            </div>
            @endif

            <!-- ======= Portfolio Details Section ======= -->
            <section id="portfolio-details" class="portfolio-details">
                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-8">
                            <div class="portfolio-details-slider swiper-container">
                                <div class="swiper-wrapper align-items-center">


                                    @foreach ($images as $item)
                                        <div style="text-align: center" class="swiper-slide">
                                            <img src="{{ asset($item->url) }}" alt="">
                                        </div>
                                    @endforeach



                                    @foreach ($images_p as $item)
                                        <div style="text-align: center" class="swiper-slide">
                                            <img src="{{ asset($item->url) }}" alt="">
                                        </div>
                                    @endforeach





                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div class="decoration">
                                <h1 class="text-center">{{ $ads->title }}</h1>
                                <p class="text-center">
                                    {{ $ads->Description }}</p>
                            </div>


                            <div class="row text-center">
                                <div class="col">
                                    <button type="button"
                                        style="box-shadow: 1px 1px 2px rgb(0, 0, 0);
                visibility: visible;
                font-weight: bold;
                font-size:20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                margin-top:10px;
                background: #1a7d0d;
                border-radius: 5px;
                width:240px;
                height: 60px;
                "
                                        class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        {{ __('messages.comment') }}
                                    </button>
                                </div>

                            </div>



                        </div>



                        <div class="col-lg-4">
                            <div class="portfolio-info text-center ">
                                <h3>{{ __('messages.anminfo') }}</h3>
                                @if ($ads->type != 'Accessories')
                                    <ul>
                                        <li><strong>{{ __('messages.name') }}</strong> : {{ $ads->title }}</li>
                                        <li><strong>{{ __('messages.category') }}</strong> :
                                            {{ __('messages.' . $ads->type) }}</li>
                                        <li><strong>{{ __('messages.price') }}</strong> : {{ $ads->price }}
                                            {{ __('messages.sp') }}</li>
                                        <li><strong>{{ __('messages.city') }}</strong> :
                                            {{ __('messages.' . $ads->city) }}</li>
                                        @if ($images_p != '[]')
                                            <li><strong>{{ __('messages.passport1') }}</strong> :
                                                {{ __('messages.yes') }}</li>
                                        @endif
                                        @if ($ads->old != null)
                                            <li><strong>{{ __('messages.age') }}</strong> : {{ $ads->old }}</li>
                                        @endif
                                        @if ($ads->country != null)
                                            <li><strong>{{ __('messages.country') }}</strong> :
                                                {{ $ads->country }}
                                            </li>
                                        @endif

                                    </ul>
                                @else
                                    <ul>
                                        <li><strong>{{ __('messages.title') }}</strong> : {{ $ads->title }}</li>
                                        <li><strong>{{ __('messages.category') }}</strong> :
                                            {{ __('messages.' . $ads->type) }} {{ __('messages.for') }}
                                            {{ __('messages.' . $ads->slug) }}</li>
                                        <li><strong>{{ __('messages.price') }}</strong> : {{ $ads->price }}
                                            {{ __('messages.sp') }}</li>
                                        <li><strong>{{ __('messages.city') }}</strong> :
                                            {{ __('messages.' . $ads->city) }}</li>
                                        @if ($images_p != '[]')
                                            <li><strong>Passport</strong> : Yes</li>
                                        @endif
                                        @if ($ads->old != null)
                                            <li><strong>Age</strong> : {{ $ads->old }}</li>
                                        @endif
                                        @if ($ads->country != null)
                                            <li><strong>Country</strong> : {{ $ads->country }}</li>
                                        @endif

                                    </ul>


                                @endif


                            </div>

                            <br>
                            <div class="portfolio-info p-t-100 text-center">
                                <h3>{{ __('messages.owninfo') }}</h3>
                                <ul>
                                    <li><strong>{{ __('messages.name') }} : </strong>{{ $user->firstname }}
                                        {{ $user->lastname }}</li>
                                    <li><strong>{{ __('messages.email') }} : </strong>{{ $user->email }}</li>
                                    <li><strong>{{ __('messages.mobile') }} : </strong>+963{{ $user->mobile }}</a>
                                    </li>


                                    <li><strong>{{ __('messages.city') }} :
                                        </strong>{{ __('messages.' . $user->city) }}</li>


                                </ul>
                                <a href=" https://wa.me/963{{ $user->mobile }}?text=أنا مهتم بحيوانك الأليف المعروض في موقع Pet Syrian  "
                                    class="google-plus"><i style="font-size: 30px" class="bx bxl-whatsapp"></i></a>

                            </div>

                        </div>

                    </div>

                </div>
            </section><!-- End Portfolio Details Section -->


            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">All Comments</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">





                            <div class="col-md-12">




                                <div class="div">


                                    @foreach ($comments as $comment)
                                        @if ($comment->user_id == $ads->user_id)
                                            @if ($comment->user->photo != null)
                                                <div class="media1 mt-3"> <a class="pr-3"><img
                                                            class="rounded-circle"
                                                            src="{{ asset('upload/photo/user/' . $comment->user->photo) }}" /></a>
                                                @else
                                                    <div class="media1 mt-3"> <a class="pr-3"><img
                                                                class="rounded-circle"
                                                                src="{{ asset('upload/photo/user/user.jpg') }}" /></a>
                                            @endif
                                            <div style="color: #000000" class="media-body">
                                                <div class="row">
                                                    <div class="col-12 d-flex">
                                                        <h5>{{ $comment->user->firstname }}
                                                            {{ $comment->user->lastname }} - </h5>
                                                        <span style="color: red"> {{ __('messages.owner') }}
                                                        </span>
                                                        <span> - {{ $comment->created_at->diffForhumans() }}</span>
                                                    </div>
                                                </div>
                                                <h4>{{ $comment->comments }}</h4>
                                            </div>
                                </div>
                            @else
                                @if ($comment->user->photo != null)
                                    <div class="media1 mt-3"> <a class="pr-3"><img class="rounded-circle"
                                                src="{{ asset('upload/photo/user/' . $comment->user->photo) }}" /></a>
                                    @else
                                        <div class="media1 mt-3"> <a class="pr-3"><img class="rounded-circle"
                                                    src="{{ asset('upload/photo/user/user.jpg') }}" /></a>
                                @endif
                                <div style="color: #000000" class="media-body">
                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <h5>{{ $comment->user->firstname }} {{ $comment->user->lastname }}
                                            </h5>
                                            <span>-
                                                {{ $comment->created_at->diffForhumans() }}</span>
                                        </div>
                                    </div>
                                    <h4>{{ $comment->comments }}</h4>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>




                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        style="box-shadow: 2px 2px 3px rgb(0, 0, 0);
        visibility: visible;
        font-weight: bold;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin-top:10px;
        
        width:130px;
        height: 60px;
        "
                        class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button"
                        style="box-shadow: 1px 1px 2px rgb(0, 0, 0);
            visibility: visible;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top:10px;
            background: #1a7d0d;
            border-radius: 5px;
            width:130px;
            height: 60px;
            "
                        class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                        Add Comment
                    </button>
                </div>

            </div>
            </div>
            </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Comment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('ads.comment') }}">
                                <textarea name="comment" id="" cols="3" rows="3" class="form-control"></textarea>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="ads_id" value="{{ $ads->id }}">


                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                style="box-shadow: 2px 2px 3px rgb(0, 0, 0);
        visibility: visible;
        font-weight: bold;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin-top:10px;
       
        width:130px;
        height: 60px;"
                                class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            <input type="submit"
                                style="box-shadow: 2px 2px 3px rgb(0, 0, 0);
          visibility: visible;
          font-weight: bold;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          margin-top:10px;
          background: #000000;
          width:130px;
          height: 60px;"
                                name="submit" value="Comment" class="btn btn-success">

                            </form>
                        </div>
                    </div>
                </div>
            </div>






    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>In&Out Group</span></strong>. All Rights Reserved<p>
                </div>

            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

            </div>
        </div>
    </footer><!-- End Footer -->



























    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop2" class="float">
        <i class="fa fa-plus my-float"> {{ __('messages.newads') }}</i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
            $("#success-alert").slideUp(500);
        });
    </script>



</body>

</html>
