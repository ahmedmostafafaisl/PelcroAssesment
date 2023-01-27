@extends('customer.layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Customer ID: {{ $customer->id }}</h5>
            <div class="card-body">
                <h5 class="card-title">Customer Full Name: {{ $customer->first_name }} {{ $customer->last_name }}</h5>
                <p class="card-text">Customer Email: {{ $customer->email }}</p>
                <p class="card-text">Customer User Name: {{ $customer->user_name }}</p>
                <p class="card-text">Customer Salary: {{ $customer->salary }}</p>
                <p class="card-text">Customer Status: {{ $customer->status }}</p>
                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Edit Customer Infromation</a>
            </div>
        </div>
    </div>
@endsection
