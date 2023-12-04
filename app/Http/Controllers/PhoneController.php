<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;

class PhoneController extends Controller
{
    public function index() {
        
        // //for check start
        // $phone = User::find(1);
        // $phone = User::find(2)->phone;
        // // return $phone;

        // $user = Phone::find(1);
        // $user = Phone::find(1)->user;
        // // return $user;
        // //for check end

        $users = User::all();
        // $mobail = Phone::all(); //alternative way
        return view('welcome',compact('users'));
    }
}
