<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional custom styles */
        .table thead th {
            background-color: #007bff;
            color: #fff;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 123, 255, 0.1);
        }
        .table-striped tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Customer List</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Designation</th>
                        <th>Age</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->designation }}</td>
                        <td>{{ $customer->age }}</td>
                        <td>{{ $customer->created_at }}</td>
                        <td>{{ $customer->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

