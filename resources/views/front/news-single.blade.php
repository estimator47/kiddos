@extends('front.layout')

@section('css')
<style>
p{
  color: black;
}
</style>
@endsection

@section('main')

    <section class="hero-wrap hero-wrap-2"
    style="background-image: url('/public/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread"></h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">{{ __('message.main') }} <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{url('/')}}">{{ __('message.news') }} <i class="ion-ios-arrow-forward"></i></a></span> <span>{{ __('message.more-det') }} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
			<div class="container"><br>
				<div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">@if(App::isLocale('ru')) {{{$new->nameru}}} @else  {{$new->name}} @endif</h2>
            <p>
              <img src="{{ asset('public/images/news/' .$new->image) }}" alt="" class="img-fluid">
            </p>
            <p>@if(App::isLocale('ru')) {{{$new->inforu}}} @else  {{$new->info}} @endif</p>
            <p>{{$new->created_at}}</p>

          </div>
                    <div class="col-lg-4 sidebar ftco-animate">
                        <div class="sidebar-box ftco-animate">
                            <h3>{{ __('message.more-read') }}</h3>
                            @foreach ($news as $info)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url('/public/images/news/{{$info->image}}');"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{url('/newssingle', [$info->id])}}">@if(App::isLocale('ru')) {{{$info->nameru}}} @else  {{$info->name}} @endif</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> {{$info->created_at}}</a></div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>                                               <!-- END COL -->
        </div>
			</div>
		</section>
@endsection

@section('js')
<script>
  $(document).ready(function(){

  });
</script>

@endsection
