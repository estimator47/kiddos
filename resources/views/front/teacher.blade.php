@extends('front.layout')

@section('css')
<style>

</style>
@endsection

@section('main')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('public/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">{{ __('message.good-staff') }}</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">{{ __('message.main') }} <i class="ion-ios-arrow-forward"></i></a></span> <span>{{ __('message.staff') }}<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pb">
			<div class="container"><br>
				<div class="row">
	            @include('front.teacher-standard');
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
