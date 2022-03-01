@include('dashboard.head.index')
<main role="main" class="justify-content-center">
 <div class="container-fluid mt-2">
  <div class="col-md-12">
   <div class="row">
    @include('dashboard.sidebar.index')
    <div class="col-md-9 ml-1 mt-2 bg-dark rd">@include('dashboard.navbar.show')</div>
   </div>
  </div>
 </div>
</main>
@include('dashboard.script.index')
