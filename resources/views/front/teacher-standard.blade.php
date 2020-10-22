@foreach($teachers as $teacher)
      <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(public/images/hodim/{{$teacher->image}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>@if(App::isLocale('ru')) {{{$teacher->nameru}}} @else  {{$teacher->name}}@endif</h3>
                <span class="position mb-2">@if(App::isLocale('ru')) {{{$teacher->occupationru}}} @else {{$teacher->occupation}}@endif</span>
                <div class="faded">
                  <p>@if(App::isLocale('ru')) {{{$teacher->inforu}}} @else  {{$teacher->info}} @endif</p>
                </div>
              </div>
            </div>
          </div>
@endforeach

