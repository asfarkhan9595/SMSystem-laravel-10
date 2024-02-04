<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS - Laravel 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <h1 class="navbar-brand m-2">Student Management System</h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Add your navigation links or other content here -->
                </nav>
            </div>
        </div>
       
    
        <div class="row mt-5">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

            <div class="col-md-3">
                <!-- The sidebar -->
                <div class="sidebar">
                    <a class="active" href="#home">Home</a>
                    <a href="{{ route('student.index') }}">Students</a>
                    <a href="#Teachers">Teachers</a>
                    <a href="#Courses">Courses</a>
                    <a href="#Enrollment">Enrollment</a>
                    <a href="#Payment">Payment</a>
                </div>
            </div>

            <div class="col-md-12">
                <!-- Page content -->
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and other scripts if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eUJqC6n2U2t6zEAMFkK3uxq39lE+CPIBc6jAAeg5gBpR3q5fOWF3sF2NqTV5t0+"
        crossorigin="anonymous"></script>
</body>

</html>
