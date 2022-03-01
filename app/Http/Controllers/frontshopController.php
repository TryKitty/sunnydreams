<?php

namespace App\Http\Controllers;
use App\Models\catalogModel;
use App\Models\shopModel;
use Illuminate\Http\Request;

class frontshopController extends Controller
{
    public function index()
    {

        $catalog = catalogModel::latest()->get();
        $shop = shopModel::latest()->get();
        return view('front.shop',compact('catalog','shop'));
    }
}
