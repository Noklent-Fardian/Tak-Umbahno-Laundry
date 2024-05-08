<div class="sidebar-menu">
    <ul class="menu mt-0">
        <li class='sidebar-title pt-0'>Main Menu</li>
            <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                    <i class="fas fa-id-badge" style="width: 20px"></i>
                        <span>Borrowing</span>
                        </a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{route('library.employee-borrow.index')}}">Employee</a>
                                </li>
                                <li>
                                    <a href="{{route('library.student-borrow.index')}}">Student</a>
                                </li>
                                <li>
                                    <a href="{{route('library.user-borrow.index')}}">User</a>
                                </li>
                            </ul>
                        </li>
        <li class='sidebar-title pt-6'>Sub Menu</li>


        <li class="sidebar-item">
            <a href="{{route('library.books.index')}}" class='sidebar-link'>
                <i class="fas fa-book"></i>
                <span class="ml-md-2">Book</span>
            </a>
        </li>
        @if (Auth::user()->hasRole('superuser') or Auth::user()->hasRole('libraryAdmin'))
        <li class="sidebar-item">
            <a href="{{route('library.book-category.index')}}" class='sidebar-link'>
                <i class="fas fa-list-ul"></i>
                <span class="ml-md-2">Book Category</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('library.book-level.index')}}" class='sidebar-link'>
                <i class="fas fa-stream"></i>
                <span class="ml-md-2">Book Level</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('library.book-location.index')}}" class='sidebar-link'>
                <i class="fas fa-location-arrow"></i>
                <span class="ml-md-2">Book Location</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('library.genre.index')}}" class='sidebar-link'>
                <i class="fas fa-list"></i>
                <span class="ml-md-2">Genre</span>
            </a>
        </li>
        @endif

        <li class="sidebar-item">
            <a href="{{route('library.employee-borrow.index')}}" class="sidebar-link">
                <i class="fas fa-id-card"></i>
                <span>Employee Borrowing</span>
            </a>
        </li>
        
        <li class="sidebar-item">
            <a href="{{route('library.student-borrow.index')}}" class="sidebar-link">
                <i class="fas fa-user-graduate"></i>
                <span>Student Borrowing</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="{{route('library.user-borrow.index')}}" class="sidebar-link">
                <i class="far fa-id-badge"></i>
                <span>User Borrowing</span>
            </a>
        </li>
    </ul>
<button class="sidebar-toggler btn x"><i class="fas fa-times"></i></button>
