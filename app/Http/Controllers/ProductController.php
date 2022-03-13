<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function mostrar(){
        $products = ['Jabon','Papel','Detergente','Cepillo'];
        $proveedores = ['A','B','C','D'];
        //return view("products/index")->with("products",$products)->with("proveedores",$proveedores);
        ///return ("Desde el controlador");
        return view("products/index",compact('products','proveedores'));
    }
}
