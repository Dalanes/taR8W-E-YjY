<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name = "csrf_token" content="{{csrf_token()}}">

    <link rel="stylesheet" href="{{asset("./css/app.css")}}">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    {{--Шрифт roboto--}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <script src="{{asset("/js/app.js")}}" defer></script>

    @yield('css')
</head>
<body>
    <header>
        <nav class="navbar navbar-light">
            <div class="col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="row justify-content-between">
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class = "contacts">Телефон: (499) 340-94-71</p>
                                        <p class = "contacts">Email: <u>info@future-group.ru</u></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class = "headline">Комментарии</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <img src="{{asset("images/logo.png")}}" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                @yield('content')
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2 logo">
                            <img src="{{asset("images/logo.png")}}" alt="logo"
                                 class = "logo">
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class = "contacts">Телефон: (499) 340-94-71</p>
                                    <p class = "contacts">Email: info@future-group.ru</p>
                                    <p class = "contacts">Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>© 2010 - 2014 Future. Все права защищены</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </footer>

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    @stack('scripts')
</body>

</html>
