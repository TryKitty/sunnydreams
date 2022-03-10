<?php

namespace App\Http\Controllers;

use App\Models\catalogModel;
use App\Models\contactModel;
use App\Models\shopModel;
use Illuminate\Http\Request;

class shopviewController extends Controller
{
    public function index ($id){
        $contact = contactModel::latest()->get();
        $catalog = catalogModel::latest()->get();
         $shop = shopModel::where('id',$id)->get();
        return view('front.shopview',compact('catalog','shop','contact'));
    }
}
