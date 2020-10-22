<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Jajji Akademiklar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
      <link rel="stylesheet" href="{{ asset('public/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('public/AdminLTE/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    @yield('css')
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="{{route('home')}}">Jajji Akademiklar</a>
            @if (\Request::is('/'))
                <div class="input-group mb-3 search">
                    <input type="text" class="form-control border-success search_input" placeholder="{{ __('message.news-search') }}"
                           aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                    <div class="input-group-append">
                        <button class="btn btn-success search-but" type="button">{{ __('message.search') }}</button>
                    </div>
                </div>
            @endif

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="{{route('home')}}" class="nav-link pl-0">{{ __('message.main') }}</a></li>
	        	<li class="nav-item active"><a href="{{route('teacher')}}" class="nav-link">{{ __('message.staff') }}</a></li>
	        	<li class="nav-item active"><a href="{{route('gallery')}}" class="nav-link">{{ __('message.gallery') }}</a></li>
	            <li class="nav-item active"><a href="{{route('contact')}}" class="nav-link">{{ __('message.contact') }}</a></li>
                <li style="width: 8%;" class="nav-item"><a href="{{ url('locale/ru') }}" class="nav-link"><img src="{{ asset('public/images/ru.jpg') }}"></a></li>
                <li style="width: 8%;" class="nav-item"><a href="{{ url('locale/uz') }}" class="nav-link"><img src="{{ asset('public/images/uz.jpg') }}"></a></li>
	        </ul>
	      </div>

	    </div>
	  </nav>
    <!-- END nav -->

    @yield('main')


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
                              <div class="row d-flex">
                                  <div class="col-md pr-4 d-flex topper align-items-center">
                                      <div class="icon bg-warning mr-2 d-flex justify-content-center align-items-center"><span class="icon-comment"></span></div>
                                      <span class="text">{{ __('message.contact-us') }}</span>
                                  </div>
                                  <div class="col-md-5 pr-4 d-flex topper align-items-center">
                                      <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map-marker"></span></div>
                                      <span class="text">{{ __('message.address-det') }}</span>
                                  </div>

                                  <div class="col-md pr-4 d-flex topper align-items-center">
                                      <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                      <span class="text">+99893 507-65-66</span>
                                  </div>
                              </div>
              <p style="font-size: 13px;">
             Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <span class="color-primary">This website</span>. Made by <a href="https://www.instagram.com/estimator47/" class="color-primary">Estimator47</a>
             </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('public/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('public/js/popper.min.js') }}"></script>
  <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('public/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('public/js/aos.js') }}"></script>
  <script src="{{ asset('public/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('public/js/main.js') }}"></script>
  @yield('js')
  </body>
</html>
