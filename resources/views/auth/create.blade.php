@extends('layouts.auth')
@section('pagename', 'Create an account')

@section('content')
<div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
    <form class="card" action="/create_account" method="POST">
        <div class="card-body text-center">
            <p>
                Use the form below to create an account at @lang('george.name.full').
                You can only create an account with your MBO Utrecht or @lang('george.name.full') email address.
            </p>
        </div>

        <div class="card-body">
            @csrf

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="firstname" value="{{ old('firstname') }}" aria-describedby="firstnameHelp" required>
                        <label for="floatingInput">Firstname</label>

                        @error('firstname')
                        <div id="firstnameHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="lastname" value="{{ old('lastname') }}" aria-describedby="lastnameHelp" required>
                        <label for="floatingInput">Lastname</label>

                        @error('lastname')
                        <div id="lastnameHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

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
                <button type="submit" class="btn btn-dark">Create my account</button>
            </div>



        </div>
    </form>

    <p class="footer-link">
        <a href="#">
            Do you already have an account? Click here to log in.
        </a>
    </p>
</div>
@endsection
