<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Material Dashboard">
        <meta name="author" content="Santosh Kumar Dash">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
        <!-- App favicon -->
        <link rel="shortcut icon" href="">
        <!-- App title -->
        <title>@yield('title') | Laravel Admin</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App css -->
       <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
       <link rel="stylesheet" href="{{ asset('css/login.css') }}">
       <!-- Font Awesome CSS-->
       <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>


        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body>
        
        @yield('content')


        <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendors/popper.js/umd/popper.min.js') }}"> </script>
        <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
