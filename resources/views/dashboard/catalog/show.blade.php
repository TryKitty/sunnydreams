<br />
<a href="{{ route('Dashboard-catalog.create') }}"
 class="btn btn-md btndb mb-3 float-right"
 ><i class="bx bx-plus text-light"></i></a>
   <br><br><br>

    <div class="col-md-12">
            <div class="row text-center">

                @foreach ($data as $catalog )
                
     <div class="col-md-4 rd">

            <table class="table">
            
              <tr>
               <th class="headdash   border-0" scope="col">Catalog {{ $catalog->id }} </th>
              </tr>
            
          
              <tr>
               <td class="bddash   border-0">{{ $catalog->name }}</td>
              </tr>
             
            
                <tr>
                 <td class="fdash rd border-0">
                     <div class="row">
                     <div class="col-sm-6"><a href="{{ route('Dashboard-catalog.edit', $catalog->id) }}"
                        class="btn btn-sm btndb"
                        ><i class="bx bx-edit"></i></a> </div>
                     <div class="col-sm-6"> <form
                        onsubmit="return confirm('Udah Yakin dihapus :v ?');"
                        action="{{ route('Dashboard-catalog.destroy', $catalog->id) }}"
                        method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btndb">
                         <i class="bx bx-trash"></i>
                        </button>
                       </form></div>
                     </div>           
                     </td>
                </tr>
              
            </table>
           </div>
           
    @endforeach
        
    </div>
    

       </div>

                     
