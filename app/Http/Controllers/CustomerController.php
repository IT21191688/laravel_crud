<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customers(){
        return view('customers.customer');
    }

    public function new(){
        return view('customers.new-customer');
    }
}
