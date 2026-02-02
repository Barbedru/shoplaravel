<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PageController extends Controller
{
    public function home()
    {
        return redirect()->route('products.show', ['id' => 42]) ;
    }

    public function about()
    {
        return 'À propos de nous';
    }


}
