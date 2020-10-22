@extends('front.layout')

@section('css')
<style>
.form-group small{
  color: red;
}
iframe {
    width: 600px;
    height: 400px;
}
@media only screen and (max-width: 1200px) {
    iframe {
        width: 500px;
        height: 400px;
    }

@media only screen and (min-width: 641px) and (max-width: 1023px) {
    iframe {
        width: 400px;
        height: 350px;
    }
}
@media only screen and (max-width:640px) {
    iframe {
        width: 500px;
        height: 300px;
    }
}
@media only screen and (max-width: 480px) {
    iframe {
        width: 350px;
        height: 250px;
    }
}
</style>
@endsection

@section('main')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('public/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">{{ __('message.contact-us') }}</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">{{ __('message.main') }} <i class="ion-ios-arrow-forward"></i></a></span> <span>{{ __('message.contact') }} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
            @if (session('message-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                    @endslot
                    {!! session('message-ok') !!}
                @endcomponent
            @endif
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">{{ __('message.address') }}</h3>
	            <p>{{ __('message.address-det') }}</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">{{ __('message.phone') }}</h3>
	            <p><a href="tel://1234567920">+99893 507-65-66</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">{{ __('message.email') }}</h3>
	            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">

            <form method="post" action="{{url('/message')}}">
                  {{ csrf_field() }}
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <input name="name" type="text" id="name" class="form-control" value="@if(old('name')){{old('name')}}@endif" placeholder="{{ __('message.snn') }}">{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
              </div>

              <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <input name="phone" type="text" id="phone" class="form-control"  value="@if(old('phone')){{old('phone')}}@endif" placeholder="{{ __('message.phone') }}">{!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
              </div>

              <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="{{ __('message.message') }}">@if(old('message')){{old('message')}}@endif</textarea>{!! $errors->first('message', '<small class="help-block">:message</small>') !!}
              </div>

              <div class="form-group">
                <input type="submit" value="{{ __('message.send-message') }}" class="btn btn-primary py-3 px-5 button-mes">
                <span class="spangreen">&nbsp;</span>
              </div>
            </form>

					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="mapt">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4236.669015437971!2d69.22094554761793!3d41.335453784768774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDIwJzA3LjEiTiA2OcKwMTMnMjguMSJF!5e0!3m2!1sru!2s!4v1593685417029!5m2!1sru!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
					</div>
				</div>
			</div>
		</section>

@endsection

@section('js')
<script>

</script>

@endsection
