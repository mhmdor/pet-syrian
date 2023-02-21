<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pet Syrian</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/animals/logo4.png') }}" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/animals/Copy+of+Copy+of+Untitled.jpg') }}" />

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{ route('home') }}">Pet Syrian <img
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





                    <li class="dropdown"><a href=""><span>{{ __('messages.about') }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="#about">{{ __('messages.about') }}</a></li>
                            <li><a class="nav-link scrollto " href="#portfolio">{{ __('messages.animals') }}</a></li>

                            <li><a class="nav-link scrollto" href="#contact">{{ __('messages.contact') }}</a></li>
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
            <a type="button" class="get-started-btn scrollto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                {{ __('messages.newads') }}
            </a>
        </div>
    </header><!-- End Header -->


    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Pet <span>Syrian</span></h1>
                    <h2>{{ __('messages.title1') }}</h2>
                </div>
            </div>
            @if (\Session::has('message'))
                <div style="background-color: rgb(0, 0, 0); font-weight: bold;font-size:20px;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"
                    class="alert  text-center" id="success-alert">
                    {!! \Session::get('message') !!}
                </div>
            @endif
            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4 col-4 text-center">
                    <a href="{{ route('ads.alltype', ['type' => 'Cat']) }}">

                        <div class="icon-box">
                            <span class="iconify" data-icon="ph:cat"></span>
                            <h3><a
                                    href="{{ route('ads.alltype', ['type' => 'Cat']) }}">{{ __('messages.cat') }}</a>
                            </h3>
                        </div>

                    </a>
                </div>
                <div class="col-xl-2 col-md-4 col-4 text-center">
                    <a href="{{ route('ads.alltype', ['type' => 'Dog']) }}">

                        <div class="icon-box">
                            <span class="iconify" data-icon="ph:dog"></span>
                            <h3><a
                                    href="{{ route('ads.alltype', ['type' => 'Dog']) }}">{{ __('messages.dog') }}</a>
                            </h3>
                        </div>

                    </a>
                </div>
                <div class="col-xl-2 col-md-4 col-4 text-center">
                    <a href="{{ route('ads.alltype', ['type' => 'Bird']) }}">
                        <div class="icon-box"><span class="iconify" data-icon="ph:bird-bold"></span>
                            <h3><a
                                    href="{{ route('ads.alltype', ['type' => 'Bird']) }}">{{ __('messages.bird') }}</a>
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-4 col-4 text-center">
                    <a href="{{ route('ads.alltype', ['type' => 'Horse']) }}">
                        <div class="icon-box">
                            <span class="iconify" data-icon="emojione-monotone:horse-face"></span>
                            <h3><a
                                    href="{{ route('ads.alltype', ['type' => 'Horse']) }}">{{ __('messages.horse') }}</a>
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-4 col-4 text-center">
                    <a href="{{ route('ads.alltype', ['type' => 'Accessories']) }}">

                        <div class="icon-box">
                            <span class="iconify" data-icon="tabler:dog-bowl"></span>
                            <h3><a
                                    href="{{ route('ads.alltype', ['type' => 'Accessories']) }}">{{ __('messages.Accessories') }}</a>
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-4 col-4 text-center">
                    <a href="{{ route('ads.alltype', ['type' => 'Others']) }}">
                        <div class="icon-box">
                            <span class="iconify" data-icon="icon-park-outline:other"></span>
                            <h3><a
                                    href="{{ route('ads.alltype', ['type' => 'Others']) }}">{{ __('messages.Others') }}</a>
                            </h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>





    <main id="main">




        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg1">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide">
                            <div 
                                class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg">

                                <p class=" quote-icon-left">
                                    {{ __('messages.title1') }}
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div 
                                class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg">

                                <p class=" quote-icon-left">
                                    {{ __('messages.title1') }}
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div 
                                class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg">

                                <p class=" quote-icon-left">
                                    {{ __('messages.title1') }} 
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div 
                                class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg">
                                <p class=" quote-icon-left">
                                    {{ __('messages.title1') }}
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ __('messages.animals') }}</h2>
                    <p>{{ __('messages.title1') }}</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">{{ __('messages.All') }}</li>
                            <li data-filter=".filter-Cat">{{ __('messages.cat') }}</li>
                            <li data-filter=".filter-Dog">{{ __('messages.dog') }} </li>
                            <li data-filter=".filter-Bird">{{ __('messages.bird') }}</li>
                            <li data-filter=".filter-Horse">{{ __('messages.horse') }}</li>
                            <li data-filter=".filter-Accessories">{{ __('messages.Accessories') }}</li>
                            <li data-filter=".filter-Others">{{ __('messages.Others') }}</li>

                        </ul>
                    </div>
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

                                        <h3>{{ __('messages.' . $ad->type) }}</h3>

                                        <div class="portfolio-links">

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

                                <a href="{{ url('ads/liked/' . $ad->id) }}"><span
                                        style="box-shadow: 2px 2px 3px rgb(0, 0, 0);
              visibility: visible;
              font-weight: bold;
              font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
              margin-top:5px;
              background: #9d0d0d;
              color:white;
              width:180px;
              height: 40px;
              "
                                        class="btn ">{{ __('messages.fav') }}</span></a>






                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-danger" role="alert">
                            No Ads Yet!!!!
                        </div>
                    @endif


                </div>

            </div>
        </section><!-- End Portfolio Section -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Pet Syrian</h3>
                            <p style="font-size: 25px">
                                {{ __('messages.title1') }} </p>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class=" col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>{{ __('messages.title6') }}</h4>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>{{ __('messages.title7') }}</h4>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-images"></i>
                                    <h4>{{ __('messages.title8') }}</h4>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-shield"></i>
                                    <h4>{{ __('messages.title9') }}</h4>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ __('messages.contact') }}</h2>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="">

                        <div class="row ">
                            <div class="col-md-4">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>{{ __('messages.OurAddress') }}</h3>
                                    <p>{{ __('messages.Address') }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box ">
                                    <i class="bx bx-envelope"></i>
                                    <h3>{{ __('messages.email') }}</h3>
                                    <p>sari@petsyrian.com </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box ">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>{{ __('messages.call') }}</h3>
                                    <p>+963 949 999 550</p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>

            </div>
        </section><!-- End Contact Section -->

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

                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>


            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="float">
        <i class="fa fa-plus my-float"> {{ __('messages.newads') }}</i>
    </a>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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



    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $("#success-alert").fadeTo(4000, 500).slideUp(500, function() {
            $("#success-alert").slideUp(500);
        });
    </script>


</body>

</html>
