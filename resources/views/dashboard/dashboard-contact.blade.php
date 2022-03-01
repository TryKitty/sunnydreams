@include('dashboard.head.index')
<main role="main" class="justify-content-center">
 <div class="container-fluid mt-2">
  <div class="col-md-12">
   <div class="row">
    @include('dashboard.sidebar.index')
    <div class="col-md-9 ml-1 bdshow rd mb-2">@include('dashboard.contact.show')</div>
   </div>
  </div>
 </div>
</main>
@include('dashboard.script.index')
