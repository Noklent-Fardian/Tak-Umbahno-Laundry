

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Landing-Ta'Umbahno Laundry</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logoril.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- CSS -->
    @yield('css')

</head>

<body>
    <h1></h1>Ini adalah halaman Pelanggan page</h1>
    //membuat logout

    {{-- <div id="app" style="min-height: 100vh;">
        <div id="sidebar" class='active shadow-lg'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <a href="{{route('admin.index') }}">
                        <div class="d-flex">
                            <img src="{{url("storage/".$schoolLogo)}}">
                            <h5 class="text-dark">{{$schoolName}}</h5>
                        </div>
                    </a>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu mt-0">
                        <li class='sidebar-title pt-0'>Main Menu</li>
                        @if (Auth::user()->hasRole('superuser'))
                            <li class="sidebar-item has-sub">
                                <a href="#" class="sidebar-link">
                                    <i class="fas fa-users" style="width: 20px"></i>
                                    <span>User</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{route('admin.user.index')}}">User</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.role.index')}}">Role</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li class="sidebar-item">
                            <a href="{{route('admin.student.index')}}" class="sidebar-link">
                                <i class="fas fa-user-graduate" style="width: 20px"></i>
                                <span>Student</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub">

                            <a href="#" class="sidebar-link">
                                <i class="fas fa-id-card-alt" style="width: 20px"></i>
                                <span>Employe</span>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="{{route('admin.employee.index')}}">Employee</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.employee-detail.index')}}">Employee Detail</a>
                                </li>
                                @if (Auth::user()->hasRole('superuser'))
                                <li>
                                    <a href="{{route('admin.employe-position.index')}}">Employe Position</a>
                                </li>
                                @endif
                                @if (Auth::user()->hasRole('superuser'))
                                <li>
                                    <a href="{{route('admin.employee-prestation-level.index')}}">Employee Prestation Level</a>
                                </li>
                                @endif
                                @if (Auth::user()->hasRole('superuser'))
                                <li>
                                    <a href="{{route('admin.employee-rank.index')}}">Employee Rank</a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        <li class='sidebar-title pt-4'>Setting</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fas fa-school" style="width: 20px"></i>
                                <span>About School</span>
                            </a>

                            <ul class="submenu ">
                                <li>
                                    <a href="{{route('admin.agenda.index')}}">Agenda</a>
                                </li>

                                <li>
                                    <a href="{{route('admin.galery-activity.index')}}">Galery Activity</a>
                                </li>

                                <li>
                                    <a href="{{route('admin.history.index')}}">History</a>
                                </li>

                                <li>
                                    <a href="{{route('admin.prestation.index')}}">Prestation</a>
                                </li>
                                
                                <li>
                                    <a href="{{route('admin.school-superiorities.index')}}">School Superiorities</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fas fa-cogs"></i>
                                <span class="ml-md-2">School Settings</span>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{route('admin.about-teacher.index')}}">About Teacher</a>
                                </li>
                                @if (Auth::user()->hasRole('superuser'))
                                <li>
                                    <a href="{{route('admin.class.index')}}">Class</a>
                                </li>
                                @if (Auth::user()->hasRole('superuser'))
                                <li>
                                    <a href="{{route('admin.education-level.index')}}">Education Level</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{route('admin.extracurricular.index')}}">Extracurricular</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{route('admin.facility.index')}}">Facility</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.image.index')}}">Image</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.parallax-image.index')}}">Parallax Image</a>
                                </li>
                                @if (Auth::user()->hasRole('superuser'))
                                <li>
                                    <a href="{{route('admin.religion.index')}}">Religion</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{route('admin.school-information.index')}}">School Information</a>
                                </li>
                                @if (Auth::user()->hasRole('superuser'))
                                <li>
                                    <a href="{{route('admin.school-year.index')}}">School Year</a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        <li class='sidebar-title pt-4'>Sub Menu</li>
                        @if (Auth::user()->hasRole('superuser'))
                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="far fa-newspaper" style="width: 20px"></i>
                                <span>Blog</span>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{route('admin.blog.index')}}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.blog-category.index')}}">Blog Category</a>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="sidebar-item">
                            <a href="{{ route('admin.blog.index')}}" class='sidebar-link'>
                                <i class="far fa-newspaper"></i>
                                <span class="ml-md-2">Blog</span>
                            </a>
                        </li>
                        @endif
                        <li class="sidebar-item">
                            <a href="{{ route('admin.ebook.index')}}" class='sidebar-link'>
                                <i class="fas fa-book"></i>
                                <span class="ml-md-3">Ebook</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.guest-book.index')}}" class='sidebar-link'>
                                <i class="fas fa-house-user"></i>
                                <span class="ml-md-2">Guest Book</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.message.index')}}" class='sidebar-link'>
                                <i class="far fa-paper-plane"></i>
                                <span class="ml-md-3">Message</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{route('admin.testimoni.index')}}" class="sidebar-link">
                                <i class="fas fa-user-graduate"></i>
                                <span class="ml-md-3">Testimonial</span>
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
                        <li class="dropdown nav-icon">
                            @if (count($messages) != 0 or count($testimonials) != 0)
                            <a href="#" data-bs-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user bg-teal text-white">
                                
                            @else
                            <a href="#" data-bs-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                            @endif
                                <div class="d-lg-inline-block">
                                    <i class="fas fa-bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                
                                <ul class="list-group rounded-none">
                                    @foreach($messages as $message)
        
                                    <li class="list-group-item border-0 align-items-start">
                                        <a href="{{route('admin.message.show', $message)}}" target="_blank" rel="noopener noreferrer" class="text-dark">
                                            <div>
                                                <h6 class='fw-bold'>New Message</h6>
                                                <p class='fs-6'>
                                                    From: {{ $message->name }}
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                        
                                    @endforeach
                                    @foreach($testimonials as $testimoni)
                                    <li class="list-group-item border-0 align-items-start">
                                        <a href="{{route('admin.testimoni.show', $testimoni)}}" target="_blank" rel="noopener noreferrer" class="text-dark">
                                            <div>
                                                <h6 class='text-bold'>New Testimonial</h6>
                                                <p class='text-xs'>
                                                    From: {{ $testimoni->name }}
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon me-2">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i class="fas fa-th fs-5"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{route('account.index')}}"><i class="fas fa-user"></i> Account</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}" id="btn-logout">
                                    <i class="fas fa-sign-out-alt text-danger"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
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
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
        <div class="mt-5">
            <h5 class="text-center text-white">Processing Your Pages</h5>
            <h6 class="text-center text-white">One Sec...</h6>
        </div>
    </div>



    <!-- Boostrap -->
    <script src="{{url("js/bootstrap/bootstrap.bundle.min.js")}}"></script>
    <!-- Jquery -->
    <script src="{{url("js/jquery/jquery-3.6.0.min.js")}}"></script>
    <!-- Volet Admin Template -->
    <script src="{{url('js/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>

    <script>
        $('#btn-logout').click((e) => {
            e.preventDefault();
            // e.submit();
            $('#logout-form').submit();
        });
        $(window).on("load",function(){
            $('.loader-wrapper').fadeOut(500);
        });
    </script>

    @yield('js') --}}
</body>

</html>