@extends('front.layout')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('public/thumber/fonts/icomoon/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/thumber/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('public/thumber/css/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('public/thumber/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/thumber/css/owl.theme.default.min.css') }}">

<link rel="stylesheet" href="{{ asset('public/thumber/css/bootstrap-datepicker.css') }}">

<link rel="stylesheet" href="{{ asset('public/thumber/fonts/flaticon/font/flaticon.css') }}">

<link rel="stylesheet" href="{{ asset('public/thumber/css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('public/thumber/css/jquery.scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('public/thumber/css/fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/thumber/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/thumber/css/style.css') }}">
<style>
.site-wrap{
  padding-right: 5px;
  padding-left: 5px;
}
</style>
@endsection

@section('main')
   

<div class="site-wrap">  
  <div class="swiper-container gallery-top">
<div class="swiper-wrapper">
@foreach($photos as $gallery)
<div class="swiper-slide cover" style="background-image: url('public/images/gallery/{{$gallery->image}}');">
  <a href="{{ asset('public/images/gallery/' .  $gallery->image) }}" data-fancybox="gallery" class="zoom"><span class="icon-search"></span></a>
</div>
@endforeach

@foreach($photos as $gallery) 
<div class="swiper-slide cover" style="background-image: url('public/images/gallery/{{$gallery->image}}');">
  <a href="{{ asset('public/images/gallery/' .  $gallery->image) }}" data-fancybox="gallery" class="zoom"><span class="icon-search"></span></a>
</div>
@endforeach

</div>
<div class="swiper-button-next swiper-button-white"></div>
<div class="swiper-button-prev swiper-button-white"></div>
</div>
<div class="swiper-container gallery-thumbs">
<div class="swiper-wrapper">
@foreach($photos as $gallery) 
<div class="swiper-slide cover" style="background-image:url(public/images/gallery/{{$gallery->image}})"></div>
@endforeach
</div>
</div>

</div> <!-- .site-wrap -->
<br>


@endsection

@section('js')  
<script src="{{ asset('public/thumber/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('public/thumber/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('public/thumber/js/jquery-ui.js') }}"></script>
<script src="{{ asset('public/thumber/js/popper.min.js') }}"></script>
<script src="{{ asset('public/thumber/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/thumber/js/owl.carousel.min.js') }}"></script>
<!-- <script src="js/jquery.stellar.min.js"></script> -->
<script src="{{ asset('public/thumber/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('public/thumber/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('public/thumber/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('public/thumber/js/aos.js') }}"></script>

<script src="{{ asset('public/thumber/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('public/thumber/js/swiper.min.js') }}"></script>
<script src="{{ asset('public/thumber/js/jquery.scrollbar.js') }}"></script>
<script src="{{ asset('public/thumber/js/main.js') }}"></script>

@endsection