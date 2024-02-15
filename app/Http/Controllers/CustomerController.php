<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Customer;

class CustomerController extends Controller
{
    public function customers(){
        return view('customers.customer');
    }

    public function new(){
        return view('customers.new-customer');
    }

  public function add(Request $request){
    $customer = $request->validate([
        'name' => 'required',
        'address' => 'required',
        'designation' => 'required',
        'age' => 'required'
    ]);

    $savedData = Customer::create($customer);
    return redirect()->route('customers.customer');
}

}
