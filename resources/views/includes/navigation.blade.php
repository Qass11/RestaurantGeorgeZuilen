<div class="container border-bottom header-bar">
    <a href="{{ route('index') }}" class="george-logo">@lang('george.name.short')</a>

    <ul>
        <li>
            <a class="nav-link {{ checkActive('index') }}" href="{{ route('index') }}">
                <i class="fal fa-home fa-fw"></i> @lang('george.navigation.home')
            </a>
        </li>
        <li>
            <a class="nav-link {{ checkActive('about') }}" href="{{ route('about') }}">
                <i class="fal fa-users fa-fw"></i> @lang('george.navigation.about')
            </a>
        </li>
        <li>
            <a class="nav-link {{ checkActive('menu') }}" href="{{ route('menu') }}">
                <i class="fal fa-utensils-alt fa-fw"></i> @lang('george.navigation.menu')
            </a>
        </li>
        <li>
            <a class="nav-link {{ checkActive('event') }}" href="{{ route('event') }}">
                <i class="fal fa-glass-cheers fa-fw"></i> @lang('george.navigation.event')
            </a>
        </li>
        <li>
            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#bookATable">
                <i class="fal fa-calendar-plus fa-fw"></i> @lang('george.navigation.table')
            </a>
        </li>
        <li>
            <a class="nav-link {{ checkActive('contact') }}" href="{{ route('contact') }}">
                <i class="fal fa-paper-plane fa-fw"></i> @lang('george.navigation.contact')
            </a>
        </li>
    </ul>
</div>
