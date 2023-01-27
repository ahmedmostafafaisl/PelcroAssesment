@extends('customer.layouts.app')
@section('title')
    Edite
@endsection

@section('content')

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{ route('customers.update', $customer->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h3 class="text-center text-info">Add Customer</h3>
                        <div class="form-group">
                            <label for="first_name" class="text-info">First Name</label><br>
                            <input required type="text" value="{{ $customer->first_name }}" name="first_name"
                                id="first_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="text-info">Last Name</label><br>
                            <input required type="text" value="{{ $customer->last_name }}" name="last_name"
                                id="last_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">Email</label><br>
                            <input required type="email" value="{{ $customer->email }}" name="email" id="email"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user_name" class="text-info">User Name</label><br>
                            <input required type="text" value="{{ $customer->user_name }}" name="user_name"
                                id="user_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="salary" class="text-info">Salary</label><br>
                            <input required type="text" value="{{ $customer->salary }}" name="salary" id="salary"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status" class="text-info">Status</label><br>
                            <input required type="tinyint" value="{{ $customer->status }}" name="status" id="status"
                                class="form-control">
                        </div>




                        <div class="form-group">
                            <input type="submit" value="Update Data" name="add" class="btn btn-success"
                                data-bs-toggle="modal">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
