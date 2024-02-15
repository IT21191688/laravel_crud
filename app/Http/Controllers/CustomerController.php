<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Customer;

class CustomerController extends Controller
{
    public function customers(){
        $customerList=Customer::all();
        return view('customers.customer',['customers'=>$customerList]);
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
    

   public function modify($customer){
    $customer = Customer::findOrFail($customer);
    
    return view('customers.update-customer', ['customer' => $customer]);
   }


}
