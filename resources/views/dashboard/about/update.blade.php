@include('dashboard.head.index')

<main role="main" class="justify-content-center">
 <div class="container-fluid mt-2">
  <div class="col-md-12">
   <div class="row">
    @include('dashboard.sidebar.index')
    <div class="col-md-9 ml-3 mt-2 bg-dark rd">
     <div class="container-fluid text-light">
      <form
       action="{{ route('Dashboard-about.update',$show->id) }}"
       method="post"
       enctype="multipart/form-data" >
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
           value="{{ old('image', $show->image) }}"
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
           required
           autofocus
          />
         </div>
        </div>
        <div class="col-md-3 mt-3">
         <div class="form-group">
          <label for="title">title</label>
          <input
           type="text"
           value="{{ old('title', $show->title) }}"
           name="title"
           class="form-control"
           required
          />
         </div>
        </div>
        <div class="col-md-9 bg-secondary rd">
         <b> Description </b>
         <div class="form-group mt-2">
          <input
           id="desc"
           type="hidden"
           name="desc"
           value="{{ old('desc', $show->desc) }}"
          />
          <trix-editor input="desc" name="desc" name="title" required></trix-editor>
         </div>
        </div>
       </div>
       <div class="col-md-12 mt-2 mb-2">@csrf</div>
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
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</main>