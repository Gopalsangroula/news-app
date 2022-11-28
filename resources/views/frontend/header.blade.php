<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('bootstrap/internalcss/style.css')}}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="header-section d-none d-sm-none d-md-block">
            <div class="container">
                <div class="py-4">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://www.appharu.com/logo.png" alt="">
                        </div>
                        <div class="col-md-10">
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.nav')
        <div class="container">
            @yield('content')
        </div>
        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="credit text-center">

                            &nbsp;&nbsp; &copy;2022 Appharu pvt. ltd. All rights reserved.
       
                           | Site By :
                           <a href="https://www.appharu.com?ref=globenepal" class="uk-text-primary">Appharu.com</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
