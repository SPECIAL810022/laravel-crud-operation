<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.15);
            padding: 40px;
            max-width: 900px;
        }
        h1 {
            color: #007bff;
            text-align: center;
            font-weight: bold;
            margin-bottom: 30px;
            font-size: 1.8rem;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            transition: all 0.3s ease;
            font-weight: 600;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .table {
            border-collapse: separate;
            border-spacing: 0;
            background-color: #f9fbfd;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.05);
        }
        .table th {
            background-color: #007bff;
            color: #fff;
            font-weight: 600;
            text-align: center;
            padding: 12px;
            font-size: 1rem;
        }
        .table td {
            text-align: center;
            padding: 12px;
            font-size: 0.9rem;
        }
        .table-striped > tbody > tr:nth-of-type(odd) {
            background-color: #f7faff;
        }
        .btn {
            color: #fff;
            font-weight: 600;
            transition: all 0.3s ease;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004494;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .text-center.mb-4 {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Management Dashboard</h1>
        <div class="text-center mb-4">
            <a href="{{ route('users.create')}}" class="btn btn-success btn-sm px-4 py-2">ADD NEW USER</a>
        </div>
        <table class="table table-striped table-bordered rounded">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suraj as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->number}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->pass}}</td>
                        <td><a href="{{route('users.show', $item->id)}}" class="btn btn-primary btn-sm">VIEW</a></td>
                        <td><a href="{{route('users.edit', $item->id)}}" class="btn btn-warning btn-sm">EDIT</a></td>
                        <td>
                            <form action="{{route('users.destroy', $item->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
