<?php

namespace App\Http\Controllers;

use App\Models\contactModel;
use Illuminate\Http\Request;

class frontcontactController extends Controller
{
    public function index()
    {

        $contact = contactModel::latest()->get();
        return view('front.contact',compact('contact'));
    }
}
