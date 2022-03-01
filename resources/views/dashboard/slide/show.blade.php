<br />
<div class="container-fluid">
 <div class="col-md-12">
  <a
   href="{{ route('Dashboard-slide.create') }}"
   class="btn btn-md btn-danger mb-3 float-right"
   ><i class="bx bx-plus text-light"></i
  ></a>
  <br />
  @forelse ($show as $slide )
  <div class="col-md-12">
   <div class="row">
    <div class="table-responsive rd">
     <table class="table">
      <thead>
       <tr>
        <th class="table-warning" scope="col">Image</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td class="table-light">
         <img
          width="150px"
          height="150px"
          src="{{ asset('storage/'. $slide->image) }}"
          alt=""
          srcset=""
          class="rd mb-1"
         />
        </td>>
       </tr>
      </tbody>
     </table>
    </div>
   </div>
  </div>
 </div>
 <form
  onsubmit="return confirm('Apakah Anda Yakin ?');"
  action="{{ route('Dashboard-slide.destroy', $slide->id) }}"
  method="POST"
  enctype="multipart/form-data"
  class="mb-3">
  <a
   href="{{ route('Dashboard-slide.edit', $slide->id) }}"
   class="btn btn-sm btn-danger"
   ><i class="bx bx-edit"></i
  ></a>
  @csrf @method('DELETE')
  <button type="submit" class="btn btn-sm btn-danger">
   <i class="bx bx-trash"></i>
  </button>
 </form>
 @empty
 <tr>
  <td class="text-center" colspan="4">
   <b class="text-light"> Data gambar tidak tersedia</b>
  </td>
 </tr>
 @endforelse
</div>
