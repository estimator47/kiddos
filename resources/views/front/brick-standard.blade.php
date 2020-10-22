@foreach($news as $new)
      <div class="col-md-6 col-lg-4 ftco-animate">
        <div class="blog-entry">
          <a href="{{url('/newssingle', [$new->id])}}" class="block-20 d-flex align-items-end"
             style="background-image: url('public/images/news/{{$new->image}}');">
            <div class="meta-date text-center p-2" style="color: white;">
              {{$new->created_at}}
            </div>
          </a>
          <div class="text bg-white p-4">
            <h3 class="heading"><a href="{{url('/newssingle', [$new->id])}}">
                @if(App::isLocale('ru'))  {{ $new->nameru }}
                    @else  {{$new->name}} @endif
                </a></h3>
              <p class="text_info">@if(App::isLocale('ru'))  {{$new->inforu}}
                  @else  {{$new->info}} @endif </p>
          </div>
        </div>
      </div>
@endforeach
