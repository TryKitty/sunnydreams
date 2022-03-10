@include('front.navbar.navbar')

<main role="main" class="justify-content-center">
 <div class="container-fluid sticky-bottom ">
  <div class="row featurette h-100 justify-content-center flex-wrap">
   <div class="col-md-8 mt-2 mb-0 h-100 bghome">
    @foreach ($home as $data )
    <h2 class="featurette-heading">
        <a class="btnhome" href="/catalog">
     <button type="button" class="btn btn-lg btn-outline-secondary rd text-center">
     {{ $data->btn }} 
     </button></a>
     <h4 class="cp">{!! $data->btndesc !!}</h4>
    </h2>
    <div class="row p-0 text-center">
     <div class="col-3 p-0  mr-0 mt-5">
      <img
       class="lghome img-fluid"
       src="{{ asset('storage/'. $data->image) }}"
       alt=""
       srcset=""
      />
     </div>
     <div class="col-6 ml-0 p-0">
      <div class="col-md-6"><h2 class="cp2">{{ $data->tcatalog }}</h2></div>
      <div class="col-md-6">
          <p class="lead"> <h5 class="cp3">{!! $data->dcatalog !!}
        </h5></p>
         </div>
     </div>
    </div>
    @endforeach 
    @foreach ($catalog as $data )
    <p class="lead">
        <a class="btnhome" href="/catalog/{{$data->id}}">
     <button type="button" class="btn btn-outline-secondary rd mt-1">
      {{ $data->name }}
     </button> </a>
    </p>
    @endforeach
    <p class="text-left order">
     <button type="button" class="btn btn-outline-secondary rd order">ORDER</button>
    </p>
   </div>
   <div class="col-md-4 h-100 p-0">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
      @foreach ($slide as $data )
      <li
       data-target="#myCarousel"
       data-slide-to="{{ $loop->index }}"
       class="{{ $loop->first ? 'active' : '' }}"
      ></li>
      @endforeach
     </ol>
     <div class="carousel-inner">
      @foreach ($slide as $data )
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
       <img
        class="w-100 h-100"
        src="{{ asset('storage/'. $data->image) }}"
        alt=""
        srcset=""
       />
       <div class="container">
        <div class="carousel-caption text-left">
         <div class="row p-0 text-center">
          @foreach ($contact as $data )
          <div class="col-3 p-0">
           <a
            class="icnhome"
            href="https://www.instagram.com/{{ $data->instagram }}/"
           >
            <i class="{!! $data->iconinstagram !!} fa-2x"></i>
           </a>
          </div>
          <div class="col-3 p-0">
           <a
            class="icnhome"
            href="https://api.whatsapp.com/send?phone={{ $data->whatsapp }}&text=Hai%20kak%20%2C%20aku%20mau%20pesennnn%20/"
           >
            <i class="{!! $data->iconwhatsapp !!} fa-2x"></i>
           </a>
          </div>
          <div class="col-3 p-0">
           <a class="icnhome" href="https://shopee.co.id/{{ $data->shopee }}/">
            <i class="{!! $data->iconshopee !!} fa-2x"></i>
           </a>
          </div>
          <div class="col-3 p-0">
           <a class="icnhome" href="mailto:{{ $data->email }}/">
            <i class="{!! $data->iconemail !!} fa-2x"></i>
           </a>
          </div>
          @endforeach
         </div>
        </div>
       </div>
      </div>
      @endforeach
     </div>
    </div>
   </div>
  </div>
 </div>
</main>
@include('front.script.sc')
