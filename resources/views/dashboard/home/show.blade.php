<br />
 <div class="container-fluid">
  <div class="col-md-12">
   <a
    href="{{ route('Dashboard-home.create') }}"
    class="btn btn-md btn-dark mb-3 float-right"
    ><i class="bx bx-plus text-light"></i
   ></a>
<br><br>
   <div class="row">
   @forelse ($home as $data )
   <div class="col-md-12">
       <div class="row">
   <div class="col-md-4">
        <img
         width="250px"
         height="250px"
         src="{{ asset('storage/'. $data->image) }}"
         alt=""
         srcset=""
         class="rd mb-1"
        />
   </div>
   <div class="col-md-6 text-dark">
       <div class="row">
           <div class="col-md-12">
            <table class="table">
                <thead>
                 <tr>
                  <th class="table-warning" scope="col">name button</th>
                  <th class="table-warning" scope="col">description</th>
                 </tr>
                </thead>
                <tbody>
                 <tr>
                  <td class="table-light">{{ $data->btn }}</td>
                  <td class="table-light">{!! $data->btndesc !!}</td>
                 </tr>
                </tbody>
               </table>
           </div>
           <div class="col-md-12">
            <table class="table">
                <thead>
                 <tr>
                  <th class="table-danger" scope="col">title catalog</th>
                  <th class="table-danger" scope="col">desc catalog</th>
                 </tr>
                </thead>
                <tbody>
                 <tr>
                  <td class="table-light">{!! $data->tcatalog !!}</td>
                  <td class="table-light">{!! $data->dcatalog !!}</td>
                 </tr>
                </tbody>
               </table>
           </div>
       </div>

   </div>
   </div>
</div>


   <div class="col-md-12">
    <div class="row">
     <div class="col-md-6">
      <div class="table-responsive rd">

      </div>
     </div>
     <div class="col-md-6">
      <div class="table-responsive rd">

      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <form
  onsubmit="return confirm('Apakah Anda Yakin ?');"
  action="{{ route('Dashboard-home.destroy', $data->id) }}"
  method="POST"
  enctype="multipart/form-data"
  class="mb-3"
 >
  <a
   href="{{ route('Dashboard-home.edit', $data->id) }}"
   class="btn btn-sm btn-dark"
   ><i class="bx bx-edit"></i
  ></a>
  @csrf @method('DELETE')
  <button type="submit" class="btn btn-sm btn-dark">
   <i class="bx bx-trash"></i>
  </button>
 </form>
 @empty
 <tr>
  <td class="text-center" colspan="4">
   <b class="text-light"> Data Home tidak tersedia</b>
  </td>
 </tr>
 @endforelse
</div>
</div>