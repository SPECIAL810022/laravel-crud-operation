<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #d4e4f7, #a0c4ed);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin: 0;
        }
        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }
        .card-header {
            background-color: #3498db;
            color: #fff;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            padding: 1.5rem;
        }
        .card-header h3 {
            font-weight: bold;
        }
        .card-body {
            padding: 2rem;
            background: #ffffff;
        }
        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        .form-label {
            font-weight: 600;
            color: #4a4a4a;
        }
        .form-control {
            padding: 0.75rem;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h3 class="mb-0">Add New User</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('addUser') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter full name" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="number" placeholder="Enter phone number" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
