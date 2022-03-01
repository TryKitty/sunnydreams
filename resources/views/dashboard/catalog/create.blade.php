@include('dashboard.head.index')
<div class="container-fluid mt-2">
 <div class="col-md-12">
  <div class="row">
   @include('dashboard.sidebar.index')
   <div class="col-md-9 ml-3 mt-2 bg-dark rd">
    <div class="container-fluid text-light">
     <form
      action="{{ route('Dashboard-catalog.store') }}"
      method="post"
      enctype="multipart/form-data">
      @csrf
      <div class="row">
       <div class="col-md-12 mt-3 text-center">
        <button type="submit" class="btn btn-md btn-danger float-right">
         <i class="bx bx-save"></i>
        </button>
        <div class="col-md-3">
            <div class="form-group">
             <label for="name" name="name">name</label>
             <input type="text" name="name" class="form-control" required />
            </div>
           </div>
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
