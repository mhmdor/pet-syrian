@php
$genderArray=['Male','Female'] ;
$cityArray=['Damascus','Homs','Latakia','Aleppo','Tartous','Daraa','Rif Dimshqq','Hama','Raqqah','Dayr az_zawr','Idlib','Alhasakah','Quneitra','Suwayda'];
$typeArray=['Cat','Dog','Bird','Horse','Breeding','Accessories','Activity','Others']
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit ADs</title>
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
                            <h3 class="modal-title">ADS Edit Successfuly</h3>
                            
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
            <form method="POST" class="contact100-form validate-form" action="{{route('ads.update',['id'=>$ads->id])}}" enctype="multipart/form-data">
              @csrf 
       

                <span class="contact100-form-title">
                Edit This Ads
                </span>
                @if ($ads->photo != null)
                <div  class="d-flex align-items-start py-3 border-bottom"> <img style="width: 150px;hight:150px"  src="{{asset('upload/photo/ads/'.$ads->photo)}}" class="img" alt=""> 
                 
                      
                  @else
                      
                  <div class="d-flex align-items-start py-3 border-bottom"> <img style="width: 150px;hight:150px" src="{{asset('upload/photo/user/user.jpg')}}" class="img" alt="">
                @endif
                  
                    <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                        <p>Accepted file type Less than 1MB</p> 
                        <div class="container1">
                          <div class="panel">
                            <div class="button_outer">
                              <div class="btn_upload">
                                <input type="file" id="upload_file" class="form-control-file"  name="photo">
                                Change Image
                              </div>
                              <div class="processing_bar"></div>
                              <div class="success_box"></div>
                            </div>
                          </div>
                          <div class="error_msg"></div>
                          <div class="uploaded_file_view"  id="uploaded_view">
                            <span class="file_remove">X</span>
                          </div>
                        </div>
                    </div>
              
                </div>


                <div class="wrap-input100 input100-select">
                    <span class="label-input100">Animals Category</span>
                    <div>
                        <select class="selection-2 " name="type" required>
                            @foreach ($typeArray as $item)
                <option value="{{$item}}" {{($ads->type==$item) ? 'selected':''}}>{{$item}}</option>
               
                @endforeach
                        </select>
                        @error('type')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Name Of Animals</span>
                    <input class="input100 " type="text" name="title" placeholder="Name of Animals" value="{{$ads->title}}">
                    @error('title')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="price is required">
                    <span class="label-input100">Price</span>
                    <input class="input100 " type="number" name="price" placeholder="Price In S.P" value="{{$ads->price}}">
                    @error('Price')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>
 
                


                <div class="wrap-input100 input100-select">
                    <span class="label-input100">Select City</span>
                    <div>
                        <select class="selection-2 " name="city" required>
                          @foreach ($cityArray as $item)
                          <option value="{{$item}}" {{($ads->city==$item) ? 'selected':''}}>{{$item}}</option>
                         
                          @endforeach

                        </select>
                        @error('city')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <span class="focus-input100"></span>
                </div>





                {{-- <div class="wrap-input100 validate-input" data-validate="photo is required">
                    <span class="label-input100">Main photo</span>
                    <br>
                    <input type="file" name="photo" id="img" style="display:none;"/>
                    <label for="img">Select Main Image  </label>

                
                    
                    @error('photo')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="photo is required">
                    <span class="label-input100">Onther photo</span>
                    <input class="input100 " type="file" name="images[]" placeholder="photo " multiple>
                    @error('photo')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div> --}}



                <div class="wrap-input100 validate-input" data-validate="Description is required">
                    <span class="label-input100">Description</span>
                    <textarea class="input100" name="Description"  placeholder=" Description here..." >{{$ads->Description}}</textarea>
                    @error('Description')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>
               
                <div class="wrap-input100 " >
                    <span class="label-input100">Age Of Animals</span>
                    <input class="input100 " type="text" name="old" placeholder="Age Of Animals" value="{{$ads->old}}">
                    @error('old')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 " >
                    <span class="label-input100"> Country of  animal</span>
                    <input class="input100 " type="text" name="country" placeholder="The country of birth of the animal" value="{{$ads->country}}">
                    @error('country')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div>
                {{-- <div class="wrap-input100 " >
                    <span class="label-input100"> photo Of passport</span>
                    <input class="input100 " type="file" name="images_p[]" placeholder="photo of passport " multiple>
                    @error('photo')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    <span class="focus-input100"></span>
                </div> --}}

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button type="submit" class="contact100-form-btn">
                            <span>
                                EDIT MY ADS
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>


                <div class="container-contact100-form-btn">
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
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
    <script>
      var btnUpload = $("#upload_file"),
        btnOuter = $(".button_outer");
      btnUpload.on("change", function(e){
        var ext = btnUpload.val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
          $(".error_msg").text("Not an Image...");
        } else {
          $(".error_msg").text("");
          btnOuter.addClass("file_uploading");
          setTimeout(function(){
            btnOuter.addClass("file_uploaded");
          },3000);
          var uploadedFile = URL.createObjectURL(e.target.files[0]);
          setTimeout(function(){
            $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
          },3500);
        }
      });
      $(".file_remove").on("click", function(e){
        $("#uploaded_view").removeClass("show");
        $("#uploaded_view").find("img").remove();
        btnOuter.removeClass("file_uploading");
        btnOuter.removeClass("file_uploaded");
      });
    </script>
</body>

</html>



















































{{-- 

@extends('layouts.app')
   
@php
$genderArray=['Male','Female'] ;
$cityArray=['Damascus','Homs','Latakia','Aleppo','Tartous','Daraa','Rif Dimshqq','Hama','Raqqah','Dayr az_zawr','Idlib','Alhasakah','Quneitra','Suwayda'];
$typeArray=['Cat','Dog','Bird','Horse','Breeding','Accessories','Activity','Others']
@endphp


   <!DOCTYPE html>
   <html lang="en">
   <head>
     <title>Edit</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--===============================================================================================-->	
     <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
   <!--===============================================================================================-->
    
     
     <link rel="stylesheet" type="text/css" href="{{asset('css_profile/main.css')}}">
   <!--===============================================================================================-->
   </head>
 

<body>

  <div class="limiter">
		<div class="container-login100">
<div class="wrapper bg-white ">
  <h4 class="pb-4 border-bottom">Edit Ads</h4>
  <form method="POST" action="{{route('ads.update',['id'=>$ads->id])}}" enctype="multipart/form-data">
    @csrf 
 
    @if ($ads->photo != null)
    <div class="d-flex align-items-start py-3 border-bottom"> <img src="{{asset('upload/photo/ads/'.$ads->photo)}}" class="img" alt=""> 
     
          
      @else
          
      <div class="d-flex align-items-start py-3 border-bottom"> <img src="{{asset('upload/photo/user/user.jpg')}}" class="img" alt="">
    @endif
    
        <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
            <p>Accepted file type Less than 1MB</p> 
            <div class="container1">
              <div class="panel">
                <div class="button_outer">
                  <div class="btn_upload">
                    <input type="file" id="upload_file" class="form-control-file"  name="photo">
                    Change Image
                  </div>
                  <div class="processing_bar"></div>
                  <div class="success_box"></div>
                </div>
              </div>
              <div class="error_msg"></div>
              <div class="uploaded_file_view"  id="uploaded_view">
                <span class="file_remove">X</span>
              </div>
            </div>
        </div>
  
    </div>
  
    
  


    
      <div class="row py-2 ">
           <label  for="title">Name Of Animals</label> <input type="text" name="title" value="{{$ads->title}}" class="bg-light form-control" placeholder="Steve"> 
      </div>
      
      <div class="row py-2">
         <label for="price">Price</label> <input type="number" name="price" value="{{$ads->price}}" class="bg-light form-control" placeholder="Steve"> </div>

        
     
        
          <div class="row py-2 ">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="Description" class="bg-light form-control" id="exampleFormControlTextarea1" rows="3"> {{$ads->Description}}</textarea>
            @error('Description')
            <small  class="form-text text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="row py-2">
            <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="type">type</label>
               <select name="type" id="type" class="bg-light">
                @foreach ($typeArray as $item)
                <option value="{{$item}}" {{($ads->type==$item) ? 'selected':''}}>{{$item}}</option>
               
                @endforeach
                  </select> </div>
  
  
            <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="City">City</label>
                <div class="arrow"> <select name="city" id="city" class="bg-light">
                  @foreach ($cityArray as $item)
                  <option value="{{$item}}" {{($ads->city==$item) ? 'selected':''}}>{{$item}}</option>
                 
                  @endforeach
                    </select> </div>
  
  
                   
                   
  
                   
            </div>
      </div>
      
      <div class="py-3 pb-4 border-bottom"> <button  type="submit" class="btn btn-success mr-3">Save Changes</button> 
        <a href="/"  class="btn border button">Return To Home</a> </div>
      </form>
 
  </div>

  

</div>

  </div>
</div>

  
  </div>

  

</div>

  </div>
</div> 


</body>
<script src="{{asset('https://code.jquery.com/jquery-3.3.1.min.js')}}"></script>


<script>
  var btnUpload = $("#upload_file"),
		btnOuter = $(".button_outer");
	btnUpload.on("change", function(e){
		var ext = btnUpload.val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
			$(".error_msg").text("Not an Image...");
		} else {
			$(".error_msg").text("");
			btnOuter.addClass("file_uploading");
			setTimeout(function(){
				btnOuter.addClass("file_uploaded");
			},3000);
			var uploadedFile = URL.createObjectURL(e.target.files[0]);
			setTimeout(function(){
				$("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
			},3500);
		}
	});
	$(".file_remove").on("click", function(e){
		$("#uploaded_view").removeClass("show");
		$("#uploaded_view").find("img").remove();
		btnOuter.removeClass("file_uploading");
		btnOuter.removeClass("file_uploaded");
	});
</script>
 --}}
