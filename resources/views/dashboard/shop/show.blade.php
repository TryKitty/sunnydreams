<br />
<div class="container-fluid">
 <div class="col-md-12">
  <a
   href="{{ route('Dashboard-shop.create') }}"
   class="btn btn-md btn-secondary mb-3 float-right"
   ><i class="bx bx-plus text-light"></i
  ></a>
  <br />
  <br>
  <div class="col-md-12">
   <div class="row">
    @foreach ( $show as $shop  )
     <table class="table rd text-dark">
      <thead>
       <tr>
        <th class="table-warning" scope="col">Image</th>
        <th class="table-warning" scope="col">Nama</th>
        <th class="table-warning" scope="col">Harga</th>
        <th class="table-warning" scope="col">Catalog</th>
        <th class="table-warning" scope="col">Deskripsi</th>
        <th class="table-warning" scope="col"></th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td class="table-light">
         <img
          width="150px"
          height="150px"
          src="{{ asset('storage/'. $shop->image) }}"
          alt=""
          srcset=""
          class="rd mb-1"
         />
        </td>
        <td class="table-light">{{ $shop->namaproduk }}</td>
        <td class="table-light">{{ $shop->harga }}</td>
        <td class="table-light">{{ $shop->catalog->name }}</td>
        <td class="table-light">{{ $shop->stok }}</td>
        <td class="table-light">  
            <div class="row">
            <div class="col-sm-6"><a href="{{ route('Dashboard-shop.edit', $shop->id) }}"
               class="btn btn-sm btndb"
               ><i class="bx bx-edit"></i></a> </div>
            <div class="col-sm-6"> <form
               onsubmit="return confirm('Udah Yakin dihapus :v ?');"
               action="{{ route('Dashboard-shop.destroy', $shop->id) }}"
               method="POST">
               @csrf @method('DELETE')
               <button type="submit" class="btn btn-sm btndb">
                <i class="bx bx-trash"></i>
               </button>
              </form></div>
            </div> </td>
       </tr>
      </tbody>
     </table>
 
    @endforeach
   </div>
  </div>
 </div>
</div>
