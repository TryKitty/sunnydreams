@include('dashboard.head.index')

<div class="container-fluid mt-2">
 <div class="col-md-12">
  <div class="row">
   @include('dashboard.sidebar.index')
   <div class="col-md-9 ml-3 mt-2 bg-dark rd">
    <div class="container-fluid text-light">
     <form action="{{ route('Dashboard-catalog.update',$show->id) }}" method="post">
      @method('put')
        @csrf
      <div class="row">
       <div class="col-md-3 mt-3">
        <div class="form-group">
         <label for="name">Catalog</label>
         <input type="text" name="name" value="{{ old('title', $show->name) }}" class="form-control" required autofocus/>
        </div>
        <div class="col-md-12 mt-2 mb-2">
         @csrf
         <button type="submit" class="btn btn-md btn-danger">
          <i class="bx bx-save"></i>
         </button>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        @include('dashboard.script.index')
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
