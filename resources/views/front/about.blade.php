@include('front.navbar.nav')
<div class="container-fluid sp mb-2 "> 
            <div class="col-md-12">
                <div class="row justify-content-center mt-2 mb-2">
                    <div class="col-md-6 text-secondary"> 
                        @foreach ($about as $data )
                            
                        <h1>ABOUT</h1>
                        <h3>{{ $data->title }}</h3> <br>
                        <h5>{!! $data->desc !!}</h5>
                            
                     </div>
                    <div class="col-md-6"> <img class="imgabout" src="{{ asset('storage/'. $data->image) }}"> </div>
                    @endforeach
            </div>
        </div>
        </div>
    </div>
    </div> 
</div>
<footer class="footer ">
    <div class="container ">
      <span class="text-muted"> <b> ©Sunnydreams.2022 </b> </span>
    </div>
  </footer>
@include('front.script.sc')