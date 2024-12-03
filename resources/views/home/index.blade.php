<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home - SMKN 2 Kraksaan</title>
    <style>
        .hero-section {
            background: url('{{ asset('img/bg-home.jpg') }}') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-subtitle {
            font-size: 1.5rem;
        }

        .container {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="hero-section">
        <div class="container">
            <h1 class="hero-title">Welcome to SMKN 2 Kraksaan</h1>
            <p class="hero-subtitle">Empowering Students for a Brighter Future</p>
        </div>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('img/bg-student.jpg') }}" class="card-img-top" alt="Student">
                    <div class="card-body">
                        <h5 class="card-title">Students</h5>
                        <p class="card-text">Manage student records and information.</p>
                        <a href="{{ route('students.index') }}" class="btn btn-primary">View Students</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('img/bg-teacher.jpg') }}" class="card-img-top" alt="Teachers">
                    <div class="card-body">
                        <h5 class="card-title">Teachers</h5>
                        <p class="card-text">View and manage teacher profiles.</p>
                        <a href="{{ route('teachers.index') }}" class="btn btn-primary">View Teachers</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('img/bg-major.jpg')}}" class="card-img-top" alt="Majors">
                    <div class="card-body">
                        <h5 class="card-title">Majors</h5>
                        <p class="card-text">Explore and manage academic majors.</p>
                        <a href="{{ route('majors.index') }}" class="btn btn-primary">View Majors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
