<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Laravel Le Tung';
        return view('products.index', compact('title'));
    }

    public function detail($id){
        return 'Product ID ='.$id;
    }

    
}
