<?php

namespace App\Http\Controllers;
use App\Models\catalogModel;
use Illuminate\Http\Request;

class catalogController extends Controller
{
   
    public function index() {
        $data = catalogModel::latest()->get();
        return view('dashboard.Dashboard-catalog',compact('data'));

    }
    public function create(){
        return view('dashboard.catalog.create');
    }
    public function store(Request $request)
    {
       
       $validatedData =$request->validate ([

             'name' => 'required',
       ]);
       
        catalogModel::create($validatedData);
 
       if ($validatedData) {
           return redirect()
           ->route('Dashboard-catalog.index')
           ->with([
               'Success'=> 'Data berhasil dimasukan'
           ]);
         } else {
             return redirect()
             ->back()
             ->withInput()
             ->with([
                 'error'=>"data bermasalah,silahkan coba kembali"
             ]);
         }
       }
       
       public function destroy($id)
       {
           $hapus = catalogModel::findOrFail($id);
           $hapus->delete();
   
           if ($hapus) {
               return redirect()
                   ->route('Dashboard-catalog.index')
                   ->with([
                       'success' => 'Berhasil dihapus'
                   ]);
           } else {
               return redirect()
                   ->route('Dashboard-catalog.index')
                   ->with([
                       'error' => 'Some problem has occurred, please try again'
                   ]);
           }
       }
       public function edit($id)
       {
           $show = catalogModel::findOrFail($id);
           return view('dashboard.catalog.update', compact('show'));
       }
 
       public function update(Request $request, $id)
       {
         
         $rules = [
              'name' =>'required',
 
         ];
         
 
          $validatedData = $request->validate($rules);
        
          catalogModel::where('id',$id)
             ->update($validatedData);
          if ($validatedData) {
             return redirect()
             ->route('Dashboard-catalog.index')
             ->with([
                 'Success'=> 'Data berhasil dimasukan'
             ]);
           } else {
               return redirect()
               ->back()
               ->withInput()
               ->with([
                   'error'=>"data bermasalah,silahkan coba kembali"
               ]);
           }
         }
}
