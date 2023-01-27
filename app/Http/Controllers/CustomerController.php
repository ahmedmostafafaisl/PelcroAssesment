<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
         $customers = Customer::all();
         return view('customer.index', ['customers' => $customers]);
    }


    public function create()
    {
       return view('customer.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:customers',
            'user_name'=>'required|unique:customers',
            'salary'=>'required',
            'status'=>'required'
        ]);
        $customer = Customer::create($request->all());
        // return response()->json([
        //     'message'=>'New Customer Added',
        // ]);
        return redirect()->route('customers.index');
    }


    public function show(Customer $customer)
    {
        return view('customer.show', ['customer' => $customer]);
    }


    public function edit(Customer $customer)
    {

      return view('customer.edit',['customer'=>$customer]);
    }


    public function update(Request $request, Customer $customer)
    {
         $customer->update($request->all());
        return redirect()->route('customers.index');
    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
