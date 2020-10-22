@extends('front.layout')

@section('css')
<style>
.about{
  background-color: rgb(73, 227, 199);
  border-radius: 25px;
  width: 90%;
}
.about img{
margin-right:2% ;
}
.ftco-no-pbb{
  padding-left: 10%;
}
.heading a:hover {
    color: #0d8ecf;
}
.heading, .text_info{
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2; /* number of lines to show */
    -webkit-box-orient: vertical;
}
.text_info {
    -webkit-line-clamp: 3;
}
</style>
@endsection

@section('main')

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(public/images/bino/image_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Kids Are The Best <span>Explorers In The World</span></h1>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(public/images/bino/image_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Perfect Place<span> For Your Child</span></h1>
          </div>
        </div>
        </div>
      </div>
      <div class="slider-item" style="background-image:url(public/images/bino/image_4.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Give Future<span> For Your Child</span></h1>
          </div>
        </div>
        </div>
      </div>
    </section>
    <br>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('public/images/image_16.jpg') }}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <span class="text-cursive h5 text-red" style="font-weight: bold;">{{ __('message.about-us') }}</span>
              <p style="font-size: 120%; color: black;">{{ __('message.allabout') }}</p>
          </div>
        </div>
      </div>
    </div>


		<section class="ftco-section bg-light">
      <h1 style="text-align: center;">{{ __('message.news') }}</h1>
      <div class="container">
        <div class="row" id="news-list">

        @include('front.brick-standard')

        </div>
        <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <button type="button" class="next_button">{{ __('message.more') }}</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div style="display:none" id="next">1</div>



    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(public/images/kindergarten-banner.jpg);" data-stellar-background-ratio="0.5">
    </section>
    <br>


@endsection

@section('js')
<script src="{{ asset('public/js/mine.js') }}"></script>
<script>
  $(document).ready(function(){
   $('.next_button').click(function(){
     BaseRecord.more($('#next').html());
     return false;
});
   $('.search-but').click(function(){
BaseRecord.search($('.search_input').val());
return false;
});
   $('.search_input').keypress(function(e) {
          if(e.which == 13){
              e.preventDefault();
              BaseRecord.search($('.search_input').val());
              return false;
          }
      });

     });
</script>

@endsection
