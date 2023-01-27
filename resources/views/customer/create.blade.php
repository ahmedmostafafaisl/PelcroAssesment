@extends('customer.layouts.app')

@section('content')

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{ route('customers.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center text-info">Add Customer</h3>
                        <div class="form-group">
                            <label for="first_name" class="text-info">First Name</label><br>
                            <input required type="text" placeholder="Please Enter Youre First Name" name="first_name"
                                id="first_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="text-info">Last Name</label><br>
                            <input required type="text" placeholder="Please Enter Youre Last Name" name="last_name"
                                id="last_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">Email</label><br>
                            <input required type="email" placeholder="Please Enter Valide Email" name="email"
                                id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user_name" class="text-info">User Name</label><br>
                            <input required type="text" placeholder="Please Enter Youre User Name" name="user_name"
                                id="user_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="salary" class="text-info">Salary</label><br>
                            <input required type="text" placeholder="Please Enter Youre Salary" name="salary"
                                id="salary" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status" class="text-info">Status</label><br>
                            <input required type="tinyint" placeholder="Please Enter Youre Status" name="status"
                                id="status" class="form-control">
                        </div>




                        <div class="form-group">
                            <input type="submit" value="Add Customer" name="add" class="btn btn-success"
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
