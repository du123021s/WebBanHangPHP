<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SophiaController extends Controller
{
    public function home(){
        $products = Product::latest()->get();
        return view('sophia.home', compact('products'));
    }

    public function account(){
        return view('sophia.account');
    }

    public function show(){

    }

    public function womenPage(){
        $catalog_Id = 'CA01';
        $products = Product::latest()->get();
        return view('sophia.women', compact('products', 'catalog_Id'));
    }

    public function manPage(){
        $catalog_Id = 'CA02';
        $products = Product::latest()->get();
        return view('sophia.man', compact('products', 'catalog_Id'));
    }

    public function accessoriesPage(){
        $catalog_Id = 'CA03';
        $products = Product::latest()->get();
        return view('sophia.accessories', compact('products', 'catalog_Id'));
    }

    public function aboutPage(){
        $products = Product::latest()->get();
        return view('sophia.about', compact('products'));
    }
}





