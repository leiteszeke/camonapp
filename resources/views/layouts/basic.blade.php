<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Administrador</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="nav">
            <a class="nav-link" href="{{ URL::to('/dashboard') }}">Dashboard</a>
            <a class="nav-link" href="{{ URL::to('/experiences') }}">Experiencias</a>
        </nav>

        <section class="wrapper closed">
            @yield('content')
        </section>

        <script type="text/javascript" src="{{ URL::asset('js/axios.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>