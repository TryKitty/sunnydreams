@include('front.navbar.nav')

<div class="container-fluid sp mb-2">
 <div class="row">
  <div class="col-md-12 mb-2">
   <div class="row">
    <div class="col-md-8 text-dark">
     @foreach ($contact as $data )
     <img
     class="imgcontact"
      src="{{ asset('storage/'. $data->image) }}"
      class="img-fluid"
      alt=""
     />
     @endforeach
    </div>
    <div class="col-md-4">
     <h1><b> Contact us </b></h1>
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-6 mt-3">
        @foreach ($contact as $data )
        <div class="card mb-3 contact">
         <a
          class="contactmedia"
          href="https://www.instagram.com/{{ $data->instagram }}/"
         >
          <i class="{{ $data->iconinstagram }} fa-8x"></i>
         </a>
         @endforeach
        </div>
       </div>
       <div class="col-md-6 mt-3">
        @foreach ($contact as $data )
        <div class="card mb-3 contact">
         <a
          class="contactmedia"
          href="https://api.whatsapp.com/send?phone={{ $data->whatsapp }}&text=Hai%20kak%20%2C%20aku%20mau%20pesennnn%20/"
         >
          <i class="{{ $data->iconwhatsapp }} fa-8x"></i>
         </a>
         @endforeach
        </div>
       </div>
      </div>
      <br />
      <div class="row mt-2">
       <div class="col-md-6 mt-3">
        @foreach ($contact as $data )
        <div class="card mb-3 contact">
         <a class="contactmedia" href="https://shopee.co.id/{{ $data->shopee }}/">
          <i class="{{ $data->iconshopee }} fa-8x"></i>
         </a>
         @endforeach
        </div>
       </div>
       <div class="col-md-6 mt-3">
        @foreach ($contact as $data )
        <div class="card mb-3 contact">
         <a class="contactmedia" href="mailto:{{ $data->email }}/">
          <i class="{{ $data->iconemail }} fa-8x"></i>
         </a>
         @endforeach
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
 <footer class="footer">
  <div class="container">
   <span class="text-muted"> <b> ©Sunnydreams.2022 </b> </span>
  </div>
 </footer>
 @include('front.script.sc')

