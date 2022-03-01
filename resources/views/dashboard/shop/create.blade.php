@include('dashboard.head.index')

<div class="container-fluid mt-2">
 <div class="col-md-12">
  <div class="row">
   @include('dashboard.sidebar.index')
   <div class="col-md-9 ml-3 mt-2 bg-dark rd">
    <div class="container-fluid text-light">
     <form
      action="{{ route('Dashboard-shop.store') }}"
      method="post"
      enctype="multipart/form-data" >
      @csrf
      <div class="row">
       <div class="col-md-12 mt-3">
        @csrf
        <button type="submit" class="btn btn-md btn-danger float-right">
         <i class="bx bx-save"></i>
        </button>
        <div class="form-group">
         <label for="image"></label>
         <img class="img-fluid" width="400px" height="250px" id="preview-image" />
         <input type="file" class="form-control-file" id="image" name="image" />
        </div>
       </div>
       <div class="col-md-12">
        <div class="row">
         <div class="col-md-3">
          <div class="form-group">
           <label for="namaproduk">Nama produk</label>
           <input type="text" name="namaproduk" class="form-control" required />
          </div>
         </div>
         <div class="col-md-3">
          <div class="form-group">
           <label for="harga">Harga produk</label>
           <input type="number" name="harga" class="form-control" required />
          </div>
         </div>
         <div class="col-md-3">
          <form class="form-grup text-center">
           <label class="" for="catalog">Catalog</label> <br />
           <select class="custom-select" id="catalog_id" name="catalog_id">
            @foreach ($catalog as $option )
            <option value="{{ $option->id}}">{{ $option->name }}</option>
            @endforeach
           </select>
          </form>
         </div>
         <div class="col-md-3">
          <div class="form-group">
           <label for="stok">Stok</label>
           <input type="number" name="stok" class="form-control" required />
          </div>
         </div>
        </div>
       </div>
       <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
       <script type="text/javascript">
        $("#image").change(function () {
         let reader = new FileReader();
         reader.onload = (e) => {
          $("#preview-image").attr("src", e.target.result);
         };
         reader.readAsDataURL(this.files[0]);
        });
       </script>
       @include('dashboard.script.index')
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
