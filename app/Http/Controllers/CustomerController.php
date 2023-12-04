<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() {
         $products = Customer::with('product')->get();
            //  return ($products);
        return view('many_To_Many',compact(['products']));


    }
    
}
