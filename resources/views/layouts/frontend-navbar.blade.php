<section id="section-1">
    <nav class="navbar navbar-expand-xl navbar-light soft-bg-teal fixed-top shadow py-3" id="navbar">
        <div class="container-lg soft-bg-teal">
            <a class="navbar-brand" href="{{route('home.index')}}">
                <img src="{{url('storage/'.$schoolLogo)}}" alt="" height="40px">
                <span class="fw-bold fst-italic">{{$schoolName}}</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav" id="about-school">
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About School
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="{{route('home.extracurriculars')}}">Extracurricular</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('home.facilities')}}">Facilities</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('home.galery-activities')}}">Galery Activity</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('home.prestations')}}">Prestations</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('home.visi-misi')}}">Vision and Mission</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Articles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="{{route('home.articles')}}">Articles</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('home.article-categories')}}">Articles Categories</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home.ebook')}}">E Book</a>
                    </li>

                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Employees & Students
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="{{route('home.employees')}}">Employees</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('home.students')}}">Students</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home.message.create')}}">Message</a>
                    </li>

                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Testimonials
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="{{route('home.testimonials')}}">Testimonials</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('home.testimonials.create')}}">Create Testimoni</a>
                            </li>
                        </ul>
                    </li>

                    @if (Auth::check())
                    <li class="nav-item active">
                        <a class="nav-link fw-bold text-dark" href="#" id="btn-logout">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                    @else 
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</section>