<?php

namespace App\Http\Controllers;
use App\Models\aboutModel;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {
        $show = aboutModel::latest()->get();
        return view('dashboard.Dashboard-about',compact('show'));
    }
    public function create(){
        return view('dashboard.about.create');
    }
    public function store(Request $request)
    {
       
       $validatedData =$request->validate ([
         'image' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:8048',
           'title' =>'required',
             'desc' => 'required',
       ]);
       
       if ($request->file('image')){
           $validatedData['image']=$request->file('image')->store('about-image');
       }
 
 
        aboutModel::create($validatedData);
 
       if ($validatedData) {
           return redirect()
           ->route('Dashboard-about.index')
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
           $hapus = aboutModel::findOrFail($id);
           $hapus->delete();
   
           if ($hapus) {
               return redirect()
                   ->route('Dashboard-about.index')
                   ->with([
                       'success' => 'Berhasil dihapus'
                   ]);
           } else {
               return redirect()
                   ->route('Dashboard-about.index')
                   ->with([
                       'error' => 'Some problem has occurred, please try again'
                   ]);
           }
       }
       public function edit($id)
       {
           $show = aboutModel::findOrFail($id);
           return view('dashboard.about.update', compact('show'));
       }
 
       public function update(Request $request, $id)
       {
         
         $rules = [
             'image' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:8048',
             'title' =>'required',
             'desc' => 'required',
 
         ];
         
 
          $validatedData = $request->validate($rules);
          if ($request->file('image')){
             $validatedData['image']=$request->file('image')->store('contact-image');
          }
          aboutModel::where('id',$id)
             ->update($validatedData);
          if ($validatedData) {
             return redirect()
             ->route('Dashboard-about.index')
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
