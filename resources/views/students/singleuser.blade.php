<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single User Data</title>
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
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
        }
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .table td:first-child {
            font-weight: bold;
            color: #555;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            transition: all 0.3s ease;
            font-weight: 600;
            display: block;
            margin: 0 auto;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Single User Data</h1>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td>NAME:</td>
                    <td>{{ $suraj->name }}</td>
                </tr>
                <tr>
                    <td>NUMBER:</td>
                    <td>{{ $suraj->number }}</td>
                </tr>
                <tr>
                    <td>EMAIL:</td>
                    <td>{{ $suraj->email }}</td>
                </tr>
                <tr>
                    <td>PASSWORD:</td>
                    <td>{{ $suraj->pass }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="{{ route('users.index') }}" class="btn btn-success btn-sm px-4">Back</a>
        </div>
    </div>
</body>
</html>
