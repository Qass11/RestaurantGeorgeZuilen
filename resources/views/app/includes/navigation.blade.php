<div class="container border-bottom header-bar">
    <a href="{{ route('app.dashboard') }}" class="george-logo">APP</a>
    <ul>
        <li>
            <a class="nav-link {{ checkActive('app.dashboard') }}" href="{{ route('app.dashboard') }}">
                <i class="fal fa-home fa-fw"></i> Dashboard
            </a>
        </li>

        <li>
            <a class="nav-link {{ checkActive('app.courses.overview') }}" href="{{ route('app.courses.overview') }}">
                <i class="fal fa-box fa-fw"></i> My Course
            </a>
        </li>

        <li>
            <a class="nav-link {{ checkActive('app.reservations.overview') }}" href="{{ route('app.reservations.overview') }}">
                <i class="fal fa-utensils fa-fw"></i> Reservations
            </a>
        </li>

        <li>
            <a class="nav-link {{ checkActive('app.users.overview') }}" href="{{ route('app.users.overview') }}">
                <i class="fal fa-users fa-fw"></i> Users
            </a>
        </li>

        <li>
            <a class="nav-link" href="{{ route('logout') }}">
                <i class="fal fa-sign-out fa-fw"></i> Logout
            </a>
        </li>
    </ul>
</div>
