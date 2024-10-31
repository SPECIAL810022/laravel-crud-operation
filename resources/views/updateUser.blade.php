<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Frosted glass background */
        body {
            background: linear-gradient(135deg, #e6edf3, #c5d2de);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        /* Card styling */
        .card {
            border: none;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.85);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .card-header {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            background: linear-gradient(135deg, #ffc107, #ffcd38);
            color: #fff;
            font-weight: bold;
        }

        /* Input and Button styling */
        .form-control {
            border-radius: 8px;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .btn-primary {
            background: linear-gradient(135deg, #007bff, #0069d9);
            border: none;
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.4);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #0069d9, #005cbf);
            box-shadow: 0 6px 15px rgba(0, 123, 255, 0.6);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h3 class="mb-0">Update User</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update', $asif->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Name</label>
                                <input type="text" value="{{ $asif->name }}" class="form-control" name="name" placeholder="Enter name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Phone Number</label>
                                <input type="text" value="{{ $asif->number }}" class="form-control" name="number" placeholder="Enter phone number" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="email" value="{{ $asif->email }}" class="form-control" name="email" placeholder="Enter email" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
