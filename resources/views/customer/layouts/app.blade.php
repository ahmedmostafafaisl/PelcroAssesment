<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panal</title>

    <link rel="stylesheet" href="style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
</head>

<body>
    <nav class="navbar navbar-light bg-light" style="margin-bottom: 10px">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-bar-chart-fill"></i> PELCERO
                <a class="btn btn-outline-primary my-2 my-sm-0" href="{{ route('customers.create') }}"> Add a New
                    Customer <i class="fas fa-plus-circle"></i></a>
            </a>

            <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('customers.index') }}" role="button">Show
                All
                Customers</a>

        </div>
    </nav>

    <div class="container"> @yield('content')</div>

</body>

</html>
