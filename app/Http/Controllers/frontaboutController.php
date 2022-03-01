<?php

namespace App\Http\Controllers;

use App\Models\aboutModel;
use Illuminate\Http\Request;

class frontaboutController extends Controller
{
    public function index()
    {

        $about = aboutModel::latest()->get();
        return view('front.about',compact('about'));
    }
}
