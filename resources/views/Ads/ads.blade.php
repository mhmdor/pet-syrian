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
        <h1 style="color: #118520" class="display-4 text-center"> Ads in Pet Syrian</h1>
        <a style="  background: #118520;
    color: #fff;
    font-size: 25px;
    box-shadow: 3px 3px 3px rgb(0, 0, 0);
    border-radius: 10px;"
            class="btn" href="{{ route('ads') }}">Dashboard</a>
    </div>
    @if ($ads->count() > 0)
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ads in Pet Syrian</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">User</th>
                                <th scope="col">Operation</th>
                                <th scope="col">Active ADs</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">User</th>
                                <th scope="col">Operation</th>
                                <th scope="col">Active ADs</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($ads as $ad)
                                <tr>
                                    <th scope="row">{{ $ad->id }}</th>
                                    <td>{{ $ad->title }}</td>
                                    <td>{{ $ad->type }}</td>
                                    <td>{{ $ad->price }}</td>
                                    <td><img width="75" height="75"
                                            src="{{ asset('upload/photo/ads/' . $ad->photo) }}"></td>
                                    <td>{{ $ad->User->firstname }} {{ $ad->User->lastname }}</td>

                                    <td>
                                        <a href="{{ route('ads.show', ['slug' => encrypt($ad->id)]) }}"
                                            class="btn btn-success"> {{ __('messages.show') }} </a>
                                        <a href="{{ route('ads.edit', Crypt::encrypt($ad->id)) }}"
                                            class="btn btn-primary"> {{ __('messages.edit') }} </a>
                                        <a href="{{ route('ads.destroy', ['id' => $ad->id]) }}"
                                            class="btn btn-danger">
                                            {{ __('messages.delete') }} </a>

                                    </td>
                                    <td>
                                        @if ($ad->act == 0)
                                            اعلان جديد
                                        @else
                                            اعلان فعال
                                        @endif

                                        {{-- @if ($ad->act == 0)
                                            <a href="{{ route('ads.act', ['id' => $ad->id]) }}" class="btn btn-success">
                                                {{ __('active ads') }} </a>
                                        @else
                                            <a href="{{ route('ads.dact', ['id' => $ad->id]) }}" class="btn btn-success">
                                                {{ __('Dactive ads') }} </a>
                                        @endif --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="alert alert-danger" role="alert">
                No Posts!!!!
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
