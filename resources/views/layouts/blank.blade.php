<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="assets/img/logoril.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('Login')</title>
    <!-- Boostrap -->
   


    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{ url('css/google-font/css2.css') }}?family=Nunito&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/base-css/style.css" rel="stylesheet">
    



    <!-- Sweet Alert -->
    <script src="{{ url('js/sweetalert/sweetalert.min.js') }}"></script>



    <!-- CSS -->
    <style>
        * {
            font-family: 'Nunito', sans-serif;
        }

        label {
            font-weight: 700 !important;
            color: var(--dark) !important;
        }

        .content {
            max-width: 80%;
        }

        .loader-wrapper {
            width: 100vw;
            height: 100vh;
            /* position: absolute;
                top: 0;
                left: 0; */
            background: linear-gradient(to bottom right, var(--light-blue), var(--cyan));
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 1000;
        }

        .loader {
            display: inline-block;
            width: 30px;
            height: 30px;
            position: relative;
            border: 4px solid #Fff;
            animation: loader 2s infinite ease;
            border-radius: 30%;
        }

        .loader-inner {
            vertical-align: top;
            display: inline-block;
            width: 100%;
            background-color: #fff;
            animation: loader-inner 2s infinite ease-in;
        }

        @keyframes loader {
            0% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(180deg);
            }

            50% {
                transform: rotate(180deg);
            }

            75% {
                transform: rotate(360deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loader-inner {
            0% {
                height: 0%;
            }

            25% {
                height: 0%;
            }

            50% {
                height: 100%;
            }

            75% {
                height: 100%;
            }

            100% {
                height: 0%;
            }
        }
    </style>
    @yield('css')
</head>

<body class="soft-bg-teal">
    @yield('content')
  
</body>

</html>
