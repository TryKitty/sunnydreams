
<br />
<div class="container-fluid">
 <div class="col-md-12">
  <a href="{{ route('Dashboard-contact.create') }}"
   class="btn btn-md btn-danger mb-3 float-right">
   <i class="bx bx-plus text-light"></i></a><br>
  @forelse ($show as $data )
  <div class="container-fluid">
   <img
    width="250px"
    height="250px"
    src="{{ asset('storage/'. $data->image) }}"
    alt=""
    srcset=""
    class="rd mb-1"/>
  </div>
  <div class="row">
   <div class="col-md-12">
    <div class="row">
     <div class="col-md-6">
      <div class="table-responsive rd">
       <table class="table">
        <thead>
         <tr>
          <th class="table-warning" scope="col">Email</th>
          <th class="table-warning" scope="col">icon</th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <td class="table-light">{{ $data->email }}</td>
          <td class="table-light">{{ $data->iconemail }}</td>
         </tr>
        </tbody>
       </table>
      </div>
     </div>
     <div class="col-md-6">
      <div class="table-responsive rd">
       <table class="table">
        <thead>
         <tr>
          <th class="table-danger" scope="col">Instagram</th>
          <th class="table-danger" scope="col">icon</th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <td class="table-light">{{ $data->instagram }}</td>
          <td class="table-light">{{ $data->iconinstagram }}</td>
         </tr>
        </tbody>
       </table>
      </div>
     </div>
     <div class="col-md-6">
      <div class="table-responsive rd">
       <table class="table">
        <thead>
         <tr>
          <th class="table-success" scope="col">Whatsapp</th>
          <th class="table-success" scope="col">icon</th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <td class="table-light">{{ $data->whatsapp }}</td>
          <td class="table-light">{{ $data->iconwhatsapp }}</td>
         </tr>
        </tbody>
       </table>
      </div>
     </div>
     <div class="col-md-6">
      <div class="table-responsive rd">
       <table class="table">
        <thead>
         <tr>
          <th class="table-warning" scope="col">Shopee</th>
          <th class="table-warning" scope="col">icon</th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <td class="table-light">{{ $data->shopee }}</td>
          <td class="table-light">{{ $data->iconshopee }}</td>
         </tr>
        </tbody>
       </table>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<form
onsubmit="return confirm('Apakah Anda Yakin ?');"
 action="{{ route('Dashboard-contact.destroy', $data->id) }}"
 method="POST"
 enctype="multipart/form-data"
 class="mb-3">
 <a href="{{ route('Dashboard-contact.edit', $data->id) }}"
  class="btn btn-sm btn-danger"
  ><i class="bx bx-edit"></i></a>
 @csrf @method('DELETE')
 <button type="submit" class="btn btn-sm btn-danger">
  <i class="bx bx-trash"></i>
 </button>
</form>
@empty
<tr>
 <td class="text-center" colspan="4">
  <b class="text-light"> Data contact tidak tersedia</b>
 </td>
</tr>
@endforelse
