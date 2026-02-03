<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function show($id)
      {
         $product = [
             'name' => 'T-shirt Laravel',
             'stock' => mt_rand(0,10),
             'etat' => true
         ];

         return view('show', [
             'product' => $product,
             'id' => $id
             
             //Atlternative avec compact()
             //return view('products.show', compact('product', 'id'));
          ]);

    }

    public function index()
     {
          $products = [
     [
             "id" => 1,
             "name" => "Le Thé Merveilleux",
             "price" => "15.40",
     ],
     [
             "id" => 2,
             "name" => "Le Café Extraordinaire",
             "price" => "12.90",
     ],
     [
             "id" => 3,
             "name" => "Le Chocolat Sublime",
             "price" => "9.50",
     ],
     [
             "id" => 4,
             "name" => "La Tisane Enchantée",
             "price" => "7.80",          
     ],
     [
             "id" => 5,
             "name" => "Le Jus Exotique",
             "price" => "11.20",     
     ],
   
   
];
            return view('products.index', [
                 'products' => $products
            ]); 
           
       
    }

    
}
