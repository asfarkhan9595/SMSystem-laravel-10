<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS - Laravel 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">

</head>

<body>
    @include('layouts.header')

    <div class="container-fluid">
        <div class="row">

            @include('layouts.sidebar')

            <main class="col-lg-9 m-4">
                @include('layouts.massage')

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS and other scripts if needed -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('assets/js/commonDelete.js') }}"></script>

    @yield('scripts')
</body>

</html>
