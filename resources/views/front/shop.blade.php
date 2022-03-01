@include('front.navbar.nav')
<div class="container-fluid sp mt-4">
    <div class="col-md-12">
<div class="row">
  @forelse ($shop as $data)
<div class="col-md-3"> 
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
<br>
@empty
  aduhjangan la
  @endforelse
</div>
</div>
</div>
<br>
<footer class="footer">
<div class="container">
<span class="text-muted"> <b> ©Sunnydreams.2022 </b> </span>
</div>
</footer>


@include('front.script.sc')