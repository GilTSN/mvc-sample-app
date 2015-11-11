<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | MVC Sample App</title>

    <!-- css -->
    <link href="{{ app('url')->asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <!-- nav -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">MVC Sample App</a>
                </div>
            </div>
        </nav>
        <!-- ./nav -->

        <!-- dynamic content -->
        @yield('content')
        <!-- ./dynamic content -->
    </div>

    <!-- js -->
    <script src="{{ app('url')->asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ app('url')->asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>