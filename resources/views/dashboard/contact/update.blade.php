@include('dashboard.head.index')
<div class="container-fluid mt-2">
 <div class="col-md-12">
  <div class="row">
   @include('dashboard.sidebar.index')

   <div class="col-md-9 ml-3 mt-2 bg-dark rd">
    <div class="container-fluid text-light">
     <form
      action="{{ route('Dashboard-contact.update', $show->id) }}"
      method="POST"
      enctype="multipart/form-data"
     >
      @csrf @method('PUT')
      <div class="row">
       <div class="col-md-12 mt-3">
        <button type="submit" class="btn btn-md btn-danger float-right">
         <i class="bx bx-save"></i>
        </button>
        <div class="form-group">
         <label for="image"></label>
         @if ($show->image)
         <img
          class="img-fluid"
          width="250px"
          height="250px"
          src="{{ asset('storage/' . $show->image) }}"
          alt=""
          id="preview-image"
         />
         @else @endif
         <input
          type="file"
          class="form-control-file"
          id="image"
          name="image"
          value="{{ old('email', $show->image) }}"
          required
          autofocus
         />
        </div>
       </div>
       <div class="col-md-3 mt-3">
        <div class="form-group">
         <label for="email">Email address</label>
         <input
          type="email"
          name="email"
          class="form-control"
          value="{{ old('email', $show->email) }}"
          required
          autofocus
         />
        </div>
        <div class="form-group">
         <label for="iconemail">Email icon</label>
         <input
          type="text"
          name="iconemail"
          class="form-control"
          value="{{ old('iconemail', $show->iconemail) }}"
          required
          autofocus
         />
        </div>
       </div>
       <div class="col-md-3 mt-3">
        <div class="form-group">
         <label for="instagram">Instagram</label>
         <input
          type="text"
          name="instagram"
          class="form-control"
          value="{{ old('instagram', $show->instagram) }}"
          required
          autofocus
         />
        </div>
        <div class="form-group">
         <label for="iconinstagram">Instagram icon</label>
         <input
          type="text"
          name="iconinstagram"
          class="form-control"
          value="{{ old('iconinstagram', $show->iconinstagram) }}"
          required
          autofocus
         />
        </div>
       </div>
       <div class="col-md-3 mt-3">
        <div class="form-group">
         <label for="whatsapp">Whatsapp</label>
         <input
          type="text"
          name="whatsapp"
          class="form-control"
          value="{{ old('whatsapp', $show->whatsapp) }}"
          required
          autofocus
         />
        </div>
        <div class="form-group">
         <label for="iconwhatsapp">whatsapp icon</label>
         <input
          type="text"
          name="iconwhatsapp"
          class="form-control"
          value="{{ old('shopee', $show->iconwhatsapp) }}"
          required
          autofocus
         />
        </div>
       </div>
       <div class="col-md-3 mt-3">
        <div class="form-group">
         <label for="shopee">Shopee</label>
         <input
          type="text"
          name="shopee"
          class="form-control"
          value="{{ old('shopee', $show->shopee) }}"
          required
          autofocus
         />
        </div>
        <div class="form-group">
         <label for="iconshopee">Shopee icon</label>
         <input
          type="text"
          name="iconshopee"
          class="form-control"
          value="{{ old('iconshopee', $show->iconshopee) }}"
          required
          autofocus
         />
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
