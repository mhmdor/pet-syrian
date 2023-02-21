<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <div style="color: #118520;background-color:rgb(216, 212, 212)" class="jumbotron text-center">
        <h1 style="background-color: #ffffff;border-radius:50px" class="display-4">Dashboard Of Pet Syrian</h1>

    </div>


    <div class="container">
        <div class="row text-center">
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style=" background: #073267;color: #fff;font-size: 25px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px"
                    href="{{ route('user') }}" class="btn  btn-icon-split btn-lg">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Users</span>
                </a>
            </div>
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style="background: #118520;color: #fff;font-size: 25px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px" href="{{ route('adsin') }}"
                class="btn  btn-icon-split btn-lg">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Animals Ads</span>
            </a>
            </div>
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style="background: #12c97a;color: #fff;font-size: 23px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px" href="{{ route('adsinact') }}"
                class="btn  btn-icon-split btn-lg">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Anm  Act</span>
            </a>
            </div>
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style="background: #0accaf;color: #fff;font-size: 23px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px" href="{{ route('adsindeact') }}"
                class="btn  btn-icon-split btn-lg">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Anm  Deact</span>
            </a>
            </div>
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style="background: #9a4178;color: #fff;font-size: 24px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px" href="{{ route('adsinAnm') }}"
                class="btn  btn-icon-split btn-lg">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Accesories Ads</span>
            </a>
            </div>
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style="background: #9584da;color: #fff;font-size: 24px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px" href="{{ route('adsinAnmact') }}"
                class="btn  btn-icon-split btn-lg">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Acc act</span>
            </a>
            </div>
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style="background: #a50367;color: #fff;font-size: 24px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px" href="{{ route('adsinAnmdeact') }}"
                class="btn  btn-icon-split btn-lg">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Acc deact</span>
            </a>
            </div>
            
            
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style="background: #496a4e;color: #fff;font-size: 25px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px" href="{{ route('ads.create') }}"
                class="btn  btn-icon-split btn-lg">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Create Anm</span>
            </a>
            </div>
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style="background: #212f23;color: #fff;font-size: 25px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px" href="{{ route('ads.createAccessories') }}"
                class="btn  btn-icon-split btn-lg">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Create Acc</span>
            </a>
           
            </div>
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style="background: #b80808;color: #fff;font-size: 25px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px" href="{{ route('ads.trashed') }}"
        class="btn  btn-icon-split btn-lg">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">Deleted Ads</span>
    </a>
            </div>
            <div style="margin-bottom:70px;margin-top:30px" class="col-6 col-md-3">
                <a style="background: #3b3b24;color: #fff;font-size: 25px;box-shadow: 3px 3px 3px rgb(0, 0, 0);border-radius: 10px" href="{{ route('ads.com') }}"
                class="btn  btn-icon-split btn-lg">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">All Comments</span>
            </a>
           
            </div>
        </div>
    </div>




    

   
   

   

    



    </div>
    </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>

</html>
