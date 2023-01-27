@extends('customer.layouts.app')

@section('content')
    <header class="header">
        <h1 id="title" class="text-center">Customers</h1>
    </header>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>User Name</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Show Data</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->first_name }}</td>
                        <td>{{ $customer->last_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->user_name }}</td>
                        <td>{{ $customer->salary }}</td>
                        <td>{{ $customer->status }}</td>
                        <td><a class="btn btn-outline-info my-2 my-sm-0"
                                href="{{ route('customers.show', $customer->id) }}">Show Details</a>
                        </td>
                        <td><a class="btn btn-outline-warning my-2 my-sm-0"
                                href="{{ route('customers.edit', $customer->id) }}">Edit Data</a>
                        </td>
                        <td>
                            <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-outline-danger my-2 my-sm-0" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
