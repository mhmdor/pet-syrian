<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ads</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/animals/logo.jpg') }}" />


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
            <h1 class="logo me-auto"><a href="{{ route('home') }}">Pet Syrian <img
                        src="{{ asset('assets/img/animals/logo.jpg') }}" class="img-fluid" alt=""></a></h1>


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
                                <a class="nav-link"
                                    href="{{ route('register') }}">{{ __('messages.Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">


                            <a type="button" class="btn " data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop1">
                                {{ __('messages.newads') }}
                            </a>


                        </li>
                        <li class="dropdown"><a id="navbarDropdown" class="" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                                {{-- <div class="d-flex align-items-start py-3 border-bottom"> <img src="{{asset('upload/photo/user/'.Auth::user()->photo)}}" class="img" alt=""> </div> --}}

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

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
            <a type="button" class="get-started-btn scrollto" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                {{ __('messages.newads') }}
            </a>
            {{-- <a href="#portfolio" class="get-started-btn scrollto">{{__('messages.start')}}</a> --}}
        </div>
    </header>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{route('home')}}">{{ __('messages.home') }}</a></li>
                <li>{{ __('messages.'.$ads1) }}</li>
            </ol>


        </div>

    </section>
    <!-- End Breadcrumbs -->




    <main id="main">


        @if (\Session::has('message'))
            <div class="alert alert-danger text-center" id="success-alert">
                <strong>Deletetd ! </strong> Your Ads has Deleted .
            </div>
        @endif



        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">
                <div class="section-title">

                    <h2>{{ __('messages.'.$ads1) }}</h2>

                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @if ($ads->count() > 0)
                        @foreach ($ads as $ad)
                            <div class="col-lg-4 col-md-6  portfolio-item filter-{{ $ad->type }}">

                                <div class="portfolio-wrap">
                                    <img src="{{ asset('upload/photo/ads/' . $ad->photo) }}" class="img-fluid"
                                        alt="">
                                    <div class="portfolio-info">
                                        <h2>{{ $ad->title }}</h2>

                                        <h3>{{__('messages.'.$ad->type)}}</h3>

                                        <div class="portfolio-links">
                                            {{-- <a href={{ asset('upload/photo/ads/' . $ad->photo) }}
                              data-gallery="portfolioGallery" class="portfolio-lightbox"
                              title="{{ $ad->type }}">
                              <h6>photo</h6>
                          </a> --}}
                                            <a href="{{ route('ads.show', ['slug' => encrypt($ad->id)]) }}"
                                                title="More Details">
                                                <h5 style=" font-weight: bold;">{{ __('messages.more') }}</h5>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <h5
                                    style="font-family: 'Courier New', Courier, monospace; font-weight: bold;margin-top:8px;">
                                    {{ $ad->created_at->diffForhumans() }}</h5>
                                <a href="{{ route('ads.edit', Crypt::encrypt($ad->id)) }}" class="btn "
                                    style="box-shadow: 2px 2px 3px rgb(0, 0, 0);
                                    visibility: visible;
                                    font-weight: bold;
                                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                    margin-top:5px;
                                    margin-bottom : 15px;
                                    background: rgb(26, 26, 98);
                                    color:white;
                                    width:100px;
                                    height: 40px;
                                    ">
                                    {{ __('messages.edit') }} </a>
                                <a href="{{ route('ads.destroy', ['id' => $ad->id]) }}" class="btn " style="box-shadow: 2px 2px 3px rgb(0, 0, 0);
                                    visibility: visible;
                                    font-weight: bold;
                                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                    margin-top:5px;
                                    margin-bottom : 15px;
                                    background-color :rgb(167, 14, 14);
                                    color:white;
                                    width:100px;
                                    height: 40px;
                                    ">
                                    {{ __('messages.delete') }} </a>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-danger" role="alert">
                            No Posts!!!!
                        </div>
                    @endif









                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>In&Out Group</span></strong>. All Rights Reserved
                </div>

            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>

            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
