<?php

namespace App\Http\Controllers;
use App\Models\homeModel;
use App\Models\catalogModel;
use App\Models\contactModel;
use App\Models\slideModel;
use Illuminate\Http\Request;

class fronthomeController extends Controller
{
    public function index()
    {
        $contact = contactModel::latest()->get();
        $slide = slideModel::latest()->get();
        $catalog = catalogModel::latest()->get();
        $home = homeModel::latest()->get();
        return view('front.home',compact('home','catalog','slide','contact'));
    }
}
