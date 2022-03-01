@include('front.navbar.nav')
<div class="container-fluid sp mt-4">
    <div class="col-md-12">
<div class="row">
    <div class="col-md-3 text-center ml-3 "> 
      <div class="container-fluid catalog  p-3 ">
        <h2 class="text-secondary"> <b> Catalog </b></h2>
        @foreach ($catalog as $data )
            
        
       <a href="/catalog/{{$data->id}}"> <button type="button" class="btn btn-outline-secondary rd mt-3">{{ $data->name }}</button> </a><br> 
        @endforeach
      </div>
        </div>
    <div class="col-md-8">    
    <div class="row">
        @foreach ($shop as $data )
        
      <div class="col-md-3 mt-2 mb-2"> 
        <a href="/shop-view/{{$data->id}}">
        <div class="card bg-white text-light border-0 rd">
            
          <img class="card-img rd" src="{{ asset('storage/'. $data->image) }}" alt="Card image">
          <div class="card-img-overlay">
            <b>
            <h6 class="card-title">{{ $data->catalog->name }}<br> {{ $data->namaproduk }} / Rp{{ $data->harga }}K </h6>
            </b>
          </div>
          
        </div> 
      </a>
        </div>
       
        @endforeach
    </div>
</div>
</div>
</div>

</div>

<footer class="footer2">
<div class="container">
<span class="text-muted"> <b> ©Sunnydreams.2022 </b> </span>
</div>
</footer>


@include('front.script.sc')