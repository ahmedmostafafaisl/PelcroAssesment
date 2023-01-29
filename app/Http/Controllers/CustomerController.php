<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

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


    public function store(CustomerRequest $request)
    {
        $customer = Customer::create($request->all());

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


    public function update(CustomerRequest $request, Customer $customer)
    {
        //  $customer->update($request->all());
        return redirect()->route('customers.index');
    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
