<?php

namespace App\Http\Controllers;

use App\Models\catalogModel;
use App\Models\shopModel;
use Illuminate\Http\Request;

class frontcatalogController extends Controller
{
    public function index()
    {   
        $catalog = catalogModel::latest()->get();
        $shop = shopModel::latest()->get();
        return view('front.catalog',compact('catalog','shop'));
    }
    public function filter ($id){
        $catalog = catalogModel::latest()->get();
         $shop = shopModel::where('catalog_id',$id)->get();
        return view('front.catalog',compact('catalog','shop'));
    }
}

