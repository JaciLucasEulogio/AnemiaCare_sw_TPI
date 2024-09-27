<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anemia Care | @yield('title')</title>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="{{ asset('css/mainStyle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
        <link rel="stylesheet" href="{{ asset('css/modals/modals.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tooltips_others/tooltip.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
        rel="stylesheet">
        @stack('styles')
    </head>

    <body>
        @yield('header')

        <main>
            @yield('content')
        </main>

        @yield('footer')
        
        <script src="{{ asset('js/datatable/jquery.min.js') }}"> </script>
        <script src="{{ asset('js/datatable/datatables.js') }}"> </script>
        <script src="{{ asset('js/datatable/datatableConfig.js') }}"> </script>
        <script src="{{ asset('js/modals/modals.js') }}"></script>
        <script src="{{ asset('js/tooltips_others/tooltip.js') }}"> </script>
        @stack('scripts')
    </body>
</html>