<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
       {
          return view('index');
       }
}

class ContactFormController extends Controller
{
    public function confirm()
       {
          return view('confirm');
       }
}
