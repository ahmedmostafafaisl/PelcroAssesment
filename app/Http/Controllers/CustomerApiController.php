<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerApiController extends Controller
{

    public function index()
    {
        return Customer::select('id', 'first_name', 'last_name', 'email', 'user_name', 'salary', 'status')->get();
    }


    public function create()
    {
        //
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
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
