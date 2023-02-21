<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin </title>

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

    <div class="jumbotron ">
        <h1 style="color: #118520" class="display-4 text-center"> Comments in Pet Syrian</h1>
        <a style="  background: #118520;
    color: #fff;
    font-size: 25px;
    box-shadow: 3px 3px 3px rgb(0, 0, 0);
    border-radius: 10px;"
            class="btn" href="{{ route('ads') }}">Dashboard</a>
    </div>
    @if ($comments->count() > 0)
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Comments in Pet Syrian</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">comment</th>
                                <th scope="col">user who com</th>
                                <th scope="col">ads id</th>
                                <th scope="col">user who ads</th>
                                <th scope="col">Operation</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">comment</th>
                                <th scope="col">user who com</th>
                                <th scope="col">ads id</th>
                                <th scope="col">user who ads</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($comments as $ad)
                                <tr>
                                    <th scope="row">{{ $ad->id }}</th>
                                    <td>{{ $ad->comments }}</td>
                                    <td>{{ $ad->user->firstname }} {{ $ad->user->lastname }}</td>
                                    <td>{{ $ad->ads_id }}</td>
                                    <td>{{ $ad->ads->user->firstname }} {{ $ad->ads->user->lastname }}</td>
                                    <td> <a href="{{ route('ads.deletecom', ['id' => $ad->id]) }}"
                                            class="btn btn-danger">
                                            delete</a></td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="alert alert-danger" role="alert">
                No comments!!!!
            </div>
    @endif






    <div>




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
