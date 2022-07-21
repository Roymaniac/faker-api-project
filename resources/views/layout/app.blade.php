<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'API PROJECT') }}</title>
    <!-- CSS only -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="text-center justify-content-center align-items-center p-2 mt-2" style="color: rgb(53, 22, 231);">
            User Profile</h1>
    </header>
    <section class="vh-100 mb-11" style="background-color: rgb(20, 19, 19);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">

                @yield('content')

            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
