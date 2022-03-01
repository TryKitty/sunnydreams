<?php

namespace App\Http\Controllers;

use App\Models\slideModel;
use Illuminate\Http\Request;

class slideController extends Controller
{
    public function index()
    {
        $show = slideModel::latest()->get();
        return view('dashboard.Dashboard-slide',compact('show'));
    }
    public function create(){
        $catalog = slideModel::latest()->get();
        
        return view('dashboard.slide.create',compact('catalog')
        );
    }
    public function store(Request $request)
    {
        
       $validatedData =$request->validate ([
         'image' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:8048',
       ]);
       
       if ($request->file('image')){
           $validatedData['image']=$request->file('image')->store('slide-image');
       }
        slideModel::create($validatedData);
        if ($validatedData) {
            return redirect()
            ->route('Dashboard-slide.index')
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
           $hapus = slideModel::findOrFail($id);
           $hapus->delete();
   
           if ($hapus) {
               return redirect()
                   ->route('Dashboard-slide.index')
                   ->with([
                       'success' => 'Berhasil dihapus'
                   ]);
           } else {
               return redirect()
                   ->route('Dashboard-slide.index')
                   ->with([
                       'error' => 'Some problem has occurred, please try again'
                   ]);
           }
       }
       public function edit(Request $request, $id)
       {
           $show = slideModel::findOrFail($id);
           return view('dashboard.slide.update', compact('show'));
       }
 
       public function update(Request $request, $id)
       {
         
        $rules = [
            'image' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:8048',

        ];
        

        $validatedData = $request->validate($rules);
        if ($request->file('image')){
           $validatedData['image']=$request->file('image')->store('slide-image');
        }
        slideModel::where('id',$id)
           ->update($validatedData);
        if ($validatedData) {
           return redirect()
           ->route('Dashboard-slide.index')
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
