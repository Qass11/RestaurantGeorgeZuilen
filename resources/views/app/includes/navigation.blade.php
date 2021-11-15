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
                <i class="fal fa-home fa-fw"></i> Courses
            </a>
        </li>

        <li>
            <a class="nav-link {{ checkActive('app.courses.subscribe') }}" href="{{ route('app.courses.subscribe') }}">
                <i class="fal fa-home fa-fw"></i> Courses Subscribe
            </a>
        </li>

        <li>
            <a class="nav-link {{ checkActive('app.reservations.overview') }}" href="{{ route('app.reservations.overview') }}">
                <i class="fal fa-home fa-fw"></i> Reservations
            </a>
        </li>

        <li>
            <a class="nav-link {{ checkActive('app.users.overview') }}" href="{{ route('app.users.overview') }}">
                <i class="fal fa-home fa-fw"></i> Users
            </a>
        </li>
    </ul>
</div>
