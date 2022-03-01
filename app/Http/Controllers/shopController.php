<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\shopModel;
use App\Models\catalogModel;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class shopController extends Controller
{
    public function index()
    {
        $show = shopModel::latest()->get();
        return view('dashboard.Dashboard-shop',compact('show'));
    }
    public function create(){
        $catalog = catalogModel::latest()->get();
        
        return view('dashboard.shop.create',compact('catalog')
        );
    }
    public function store(Request $request)
    {
        
       $validatedData =$request->validate ([
         'image' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:8048',
           'namaproduk' =>'required',
           'catalog_id' =>'required',
             'harga' => 'required',
             'stok' => 'required',
       ]);
       
       if ($request->file('image')){
           $validatedData['image']=$request->file('image')->store('shop-image');
       }
 
 
        shopModel::create($validatedData);
        if ($validatedData) {
            return redirect()
            ->route('Dashboard-shop.index')
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
           $hapus = shopModel::findOrFail($id);
           $hapus->delete();
   
           if ($hapus) {
               return redirect()
                   ->route('Dashboard-shop.index')
                   ->with([
                       'success' => 'Berhasil dihapus'
                   ]);
           } else {
               return redirect()
                   ->route('Dashboard-shop.index')
                   ->with([
                       'error' => 'Some problem has occurred, please try again'
                   ]);
           }
       }
       public function edit(Request $request, $id)
       {
        $catalog = catalogModel::latest()->get();
           $show = shopModel::findOrFail($id);
           return view('dashboard.shop.update', compact('show','catalog'));
       }
 
       public function update(Request $request, $id)
       {
         
        $rules = [
            'image' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:8048',
            'namaproduk' =>'required',
            'catalog_id' =>'required',
              'harga' => 'required',
              'stok' => 'required',

        ];
        

        $validatedData = $request->validate($rules);
        if ($request->file('image')){
           $validatedData['image']=$request->file('image')->store('shop-image');
        }
        shopModel::where('id',$id)
           ->update($validatedData);
        if ($validatedData) {
           return redirect()
           ->route('Dashboard-shop.index')
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
