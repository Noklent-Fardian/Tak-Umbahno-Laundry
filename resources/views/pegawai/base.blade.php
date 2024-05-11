<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pegawai-Ta'Umbahno Laundry</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logoril.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Boostrap -->
    <link href="{{ url('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- My Base Css -->
    <link rel="stylesheet" href="{{ url('css/base-css/style.css') }}">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{ url('css/google-font/css2.css') }}?family=Nunito&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="{{ url('css/fontawesome/css/all.min.css') }}">

    <!-- Voler Admin Template -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('js/perfect-scrollbar/perfect-scrollbar.css') }}">
 

    <!-- Sweet Alert -->
    <script src="{{ url('js/sweetalert/sweetalert.min.js') }}"></script>


    <!-- Main CSS File -->
    <script src="https://kit.fontawesome.com/b3b4af6c9c.js" crossorigin="anonymous"></script>

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- CSS -->
    <style>
        * {
            font-family: 'Nunito', sans-serif;
        }

        label {
            font-weight: 700 !important;
            color: var(--dark) !important;
        }

        .fas.fs-6.fa-search {
            cursor: pointer;
            color: var(--lime);
        }

        .loader-wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: linear-gradient(to bottom right, var(--teal), var(--cyan));
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

<body>
    <div id="app" style="min-height: 100vh;">
        <div id="sidebar" class='active shadow-lg'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <a href="#">
                        <div class="d-flex">

                            <h5 class="text-dark">Ta'Umbahno Laundry</h5>
                        </div>
                    </a>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu mt-0">
                        <li class='sidebar-title pt-0'>Main Menu</li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fa-solid fa-cart-shopping" style="width: 20px"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fa-solid fa-users" width="20px"></i>
                                <span>Customer</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fa-solid fa-user" width="20px"></i>
                                <span>Account</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fa-solid fa-person" width="20px"></i>
                                <span>Pegawai</span>
                            </a>
                        </li>
                        <li class='sidebar-title pt-4'>Setting</li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="fa-solid fa-cubes-stacked" width="20px"></i>
                                <span>Stock</span>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="#">Tambah Stock</a>
                                </li>
                                <li>
                                    <a href="#">Edit Stock</a>
                                </li>
                            </ul>
                        </li>

                        <li class='sidebar-title pt-4'>Sub Menu</li>

                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-dumpster-fire" width="20px"></i>
                                <span class="ml-md-2">Layanan</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ url('pegawai/penyuplai/index') }}" class='sidebar-link'>
                                <i class="fas fa-book"></i>
                                <span class="ml-md-3">Supplier</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('pegawai/jenis_member/index') }}" class='sidebar-link'>
                                <i class="fas fa-house-user"></i>
                                <span class="ml-md-2">Jenis Member</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-money-bill" width="20ox"></i>
                                <span class="ml-md-3">Metode Pembayaran</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                        <li class="dropdown nav-icon me-2">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i class="fas fa-th fs-5"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Account</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#" id="btn-logout">
                                    <i class="fas fa-sign-out-alt text-danger"></i> Logout
                                </a>
                                <form id="logout-form" action="" method="POST">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="main-content container-fluid">
                <!-- CONTENT -->
                @yield('content')
                <!-- CONTENT -->
            </div>

        </div>
    </div>
    @include('include.script')
    @yield('page_script')

    <script>
        $('#btn-logout').click((e) => {
            e.preventDefault();
            // e.submit();
            $('#logout-form').submit();
        });
        $(window).on("load", function() {
            $('.loader-wrapper').fadeOut(500);
        });
    </script>
    @yield('js')
   
</body>

</html>
