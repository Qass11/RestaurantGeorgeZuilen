@extends('layouts.auth')
@section('pagename', 'Login')

@section('content')
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <form class="card" action="/login" method="POST">
            <div class="card-body text-center">
                <p>
                    Use the form below to log into your personal area of @lang('george.name.full').
                </p>
            </div>

            @if (session()->has('error'))
                <p>
                    {{ session('error') }}
                </p>
            @endif

            <div class="card-body">
                @csrf

                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" value="{{ old('email') }}" aria-describedby="emailHelp" required>
                    <label for="floatingInput">E-mail address</label>

                    @error('email')
                    <div id="emailHelp" class="form-text color-red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password" aria-describedby="passwordHelp" required>
                    <label for="floatingInput">Password</label>

                    @error('password')
                    <div id="passwordHelp" class="form-text color-red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark">Login with my credentials</button>
                </div>



            </div>
        </form>

        <p class="footer-link">
            <a href="{{ route('register') }}">
                Don't have an account yet? Click here to create an account.
            </a>
        </p>
    </div>
@endsection
