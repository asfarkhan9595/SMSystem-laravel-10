<!DOCTYPE html>
<html>

<head>
    <title>Student Laravel 9 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h1 class="navbar-brand" href="#">Student Managment System</h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <!-- The sidebar -->
                <div class="sidebar">
                    <a class="active" href="#home">Home</a>
                    <a href="#news">Students</a>
                    <a href="#contact">Teachers</a>
                    <a href="#about">Courses</a>
                    <a href="#about">Enrollment</a>
                    <a href="#about">Payment</a>
                </div>

                <div class="col-md-9"> 
                <!-- Page content -->
                <div class="content">
                    @yield('content')
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
