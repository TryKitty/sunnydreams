@include('dashboard.head.index')

<div class="container-fluid mt-2">
 <div class="col-md-12">
  <div class="row">
   @include('dashboard.sidebar.index')
   <div class="col-md-9 ml-3 mt-2 bg-dark rd">
    <div class="container-fluid text-light">
     <form
      action="{{ route('Dashboard-slide.store') }}"
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
