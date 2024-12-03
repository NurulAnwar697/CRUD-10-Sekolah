<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
        <div class="container">
            <a class="navbar-brand" href="#">SMKN 2 Kraksaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}"
                            href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('students.index') ? 'active' : '' }}"
                            href="{{ route('students.index') }}">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('teachers.index') ? 'active' : '' }}"
                            href="{{ route('teachers.index') }}">Teacher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('majors.index') ? 'active' : '' }}"
                            href="{{ route('majors.index') }}">Major</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('classrooms.index') ? 'active' : '' }}"
                            href="{{ route('classrooms.index') }}">ClassRoom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('subjects.index') ? 'active' : '' }}"
                            href="{{ route('subjects.index') }}">Subject</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-wABsW0CGfKPjHR3hQ44us0Af9zOWlXaxVr0RZxxy+TFeKAKwImUYoE67M/ysu5wO" crossorigin="anonymous">
    </script>
</body>

</html>
