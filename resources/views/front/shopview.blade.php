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
        <div class="col-md-8 ">
            
            <img class="imgshowview zoomE rd mb-3" width="400px" height="500px"  src="{{ asset('storage/'. $data->image) }}" ><br>
           
        </div>
        <div class="col-md-4 text-left">
        
        <h3> <b>{{ $data->namaproduk }}</b> </h3>
        <b>{{ $data->catalog->name }}</b><br>
        <h4>Rp{{ $data->harga }}K</h4><br>
        <p>Lorem ipsum dolor sit amet <br>
        </p>  
        <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#exampleModalCenter">Buy</button>         
        </div>
        @endforeach
    </div>
        
    </div>
</div>
</div>
</div>

</div>
<div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content mbg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Hai ka , silahkan pilih metode pembeliannya 😊😊😊</h5>
        <a  class="close border-0" data-dismiss="modal" aria-label="Close"> <box-icon name='x'></box-icon> </a>

      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <a class="md" href="">
           <b> Order by whatsapp </b>
            <box-icon  type='logo' name='whatsapp' ></box-icon></a>
          </div>
          <div class="col-md-6">
            <a class="md" href="">
           
            <img width="25px" src="img/shopee.png" ></a> 
           
            
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