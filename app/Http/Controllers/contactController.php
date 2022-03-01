<?php

namespace App\Http\Controllers;

use App\Models\contactModel;
use Illuminate\Http\Request;

class contactController extends Controller
{
   public function index()
   {
       $show = contactModel::latest()->get();
       return view('dashboard.Dashboard-contact',compact('show'));
   }
   public function create(){
       return view('dashboard.contact.create');
   }


   public function store(Request $request)
   {
      
      $validatedData =$request->validate ([
        'image' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:8048',
          'email' =>'required',
            'iconemail' => 'required',
            'instagram' => 'required',
            'iconinstagram' => 'required',
            'whatsapp' => 'required',
            'iconwhatsapp' => 'required',
            'shopee' => 'required',
            'iconshopee' => 'required',
      ]);
      
      if ($request->file('image')){
          $validatedData['image']=$request->file('image')->store('contact-image');
      }


       contactModel::create($validatedData);

      if ($validatedData) {
          return redirect()
          ->route('Dashboard-contact.index')
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
          $hapus = contactModel::findOrFail($id);
          $hapus->delete();
  
          if ($hapus) {
              return redirect()
                  ->route('Dashboard-contact.index')
                  ->with([
                      'success' => 'Berhasil dihapus'
                  ]);
          } else {
              return redirect()
                  ->route('Dashboard-contact.index')
                  ->with([
                      'error' => 'Some problem has occurred, please try again'
                  ]);
          }
      }
      public function edit($id)
      {
          $show = contactModel::findOrFail($id);
          return view('dashboard.contact.update', compact('show'));
      }

      public function update(Request $request, $id)
      {
        
        $rules = [
            'image' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:8048',
             'email' =>'required',
               'iconemail' => 'required',
               'instagram' => 'required',
               'iconinstagram' => 'required',
               'whatsapp' => 'required',
               'iconwhatsapp' => 'required',
               'shopee' => 'required',
               'iconshopee' => 'required'

        ];
        

         $validatedData = $request->validate($rules);
         if ($request->file('image')){
            $validatedData['image']=$request->file('image')->store('contact-image');
         }
         contactModel::where('id',$id)
            ->update($validatedData);
         if ($validatedData) {
            return redirect()
            ->route('Dashboard-contact.index')
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
