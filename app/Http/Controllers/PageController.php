<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
   {
      return view('home');

   }

    public function index()
    {
        return view('products.index');

    }

    public function category()
    {
        return view('index');

    }


    public function about()
   {
     return view('about');

   }

    public function contact()
   {
     return view('contact');

   }





}
