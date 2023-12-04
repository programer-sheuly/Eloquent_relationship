<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
// use App\Models\Product;
use App\Models\Customer;

class ProductController extends Controller
{
    public function index() {
        $products = Brand::with('product')->get();
        // return ($products);
        return view('product_onToMany',compact(['products']));



        
            
    
        }
    }

