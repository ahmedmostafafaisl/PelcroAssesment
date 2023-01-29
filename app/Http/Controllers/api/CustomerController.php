<?php

namespace App\Http\Controllers\api;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Http\Resources\CustomerResource;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = CustomerResource::collection( Customer::all());
        return $customers ;
    }

    public function store(CustomerRequest $request)
    {
               Customer::create([
             'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'user_name'=>$request->user_name,
            'salary'=>$request->salary,
            'status'=>$request->status
        ]);

      return response()->json([
            'message' => 'New Customer Added',
        ]);
    }

    public function show(Customer $customer)
    {

        $customer = new CustomerResource($customer);
         return response()->json([
            'customer' => $customer,
        ]);
    }
    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        // $customer->fill($request->post())->update();
        return response()->json([
            'message' => 'Customer Data Updated',
        ]);
    }

    public function destroy(Customer $customer)
    {
           $customer->delete();
        return response()->json([
            'message' => 'Customer Deleted Successfully',
        ]);
    }
}
