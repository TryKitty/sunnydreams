<br />
<div class="container-fluid">
 <div class="col-md-12">
  <a
   href="{{ route('Dashboard-about.create') }}"
   class="btn btn-md btn-danger mb-3 float-right"
   ><i class="bx bx-plus text-light"></i
  ></a>
  <br />
  @forelse ($show as $about )
  <div class="row">
   <div class="col-md-12 mt-1">
    <div class="table-responsive rd">
     <table class="table">
      <thead>
       <tr>
        <th class="table-success" scope="col">image</th>
        <th class="table-success" scope="col">title</th>
        <th class="table-success" scope="col">description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td class="table-light">
         <img
          width="250px"
          height="250px"
          src="{{ asset('storage/'. $about->image) }}"
          alt=""
          srcset=""
          class="rd mb-1"
         />
        </td>
        <td class="table-light">{{ $about->title }}</td>
        <td class="table-light">{!! $about->desc !!}</td>
       </tr>
      </tbody>
     </table>
    </div>
   </div>
  </div>
 </div>
</div>
<form
 onsubmit="return confirm('Apakah Anda Yakin ?');"
 action="{{ route('Dashboard-about.destroy', $about->id) }}"
 method="POST"
 enctype="multipart/form-about"
 class="mb-3"
>
 <a
  href="{{ route('Dashboard-about.edit', $about->id) }}"
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
  <b class="text-light"> Data about tidak tersedia</b>
 </td>
</tr>
@endforelse
