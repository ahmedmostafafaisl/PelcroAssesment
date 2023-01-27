@extends('customer.layouts.app')
@section('title')
    List
@endsection

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






    <!-- medium modal -->
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Customer's Full Details</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // display a modal
        $(document).on('click', '#mediumButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                success: function(result) {
                    $('#mediumModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
    </script>
@endsection
