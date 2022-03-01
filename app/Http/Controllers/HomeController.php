<?php

namespace App\Http\Controllers;

use App\Models\homeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home = homeModel::latest()->get();
        return view('dashboard.Dashboard-home',compact('home'));
    }


    public function create(){
        return view('dashboard.home.create');
    }

    public function store(Request $request)
    {
       
       $validatedData =$request->validate ([
         'image' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:8048',
             'btn' => 'required',
             'btndesc' => 'required',
             'tcatalog' => 'required',
             'dcatalog' => 'required',
       ]);
       
       if ($request->file('image')){
           $validatedData['image']=$request->file('image')->store('home-logo');
       }
 
 
        homeModel::create($validatedData);
 
       if ($validatedData) {
           return redirect()
           ->route('Dashboard-home.index')
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
           $hapus = homeModel::findOrFail($id);
           $hapus->delete();
   
           if ($hapus) {
               return redirect()
                   ->route('Dashboard-home.index')
                   ->with([
                       'success' => 'Berhasil dihapus'
                   ]);
           } else {
               return redirect()
                   ->route('Dashboard-home.index')
                   ->with([
                       'error' => 'Some problem has occurred, please try again'
                   ]);
           }
       }
       public function edit($id)
       {
           $show = homeModel::findOrFail($id);
           return view('dashboard.home.update', compact('show'));
       }
 
       public function update(Request $request, $id)
       {
         
         $rules = [
             'image' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:8048',
             'btn' => 'required',
             'btndesc' => 'required',
             'tcatalog' => 'required',
             'dcatalog' => 'required',
 
         ];
         
 
          $validatedData = $request->validate($rules);
          if ($request->file('image')){
             $validatedData['image']=$request->file('image')->store('logo-image');
          }
          homeModel::where('id',$id)
             ->update($validatedData);
          if ($validatedData) {
             return redirect()
             ->route('Dashboard-home.index')
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
