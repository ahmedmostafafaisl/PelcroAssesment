<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = CustomerResource::collection( Customer::all());
        return $customers ;
        // return Customer::select('id','first_name', 'last_name','email','user_name','salary','status')->get();
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



    public function update(Request $request, Customer $customer)
    {
             $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:customers',
            'user_name'=>'required|unique:customers',
            'salary'=>'required',
            'status'=>'required'
        ]);
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