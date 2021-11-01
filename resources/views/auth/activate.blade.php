@extends('layouts.auth')
@section('pagename', 'Activate your account')

@section('content')
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <form class="card" action="{{ route('storeActivate', $user->activation_token) }}" method="POST">
            <div class="card-body text-center">
                <p>
                    <strong>Hello, {{ $user->firstname }} {{ $user->lastname }}! <i class="far fa-hand-peace fa-fw"></i></strong>
                    Use the form below to activate your account and complete the necessary information to complete your account.
                </p>
            </div>

            <div class="card-body">
                @csrf

                <input type="hidden" name="uuid" value="{{$user->activation_token}}">

                <div class="row">
                    <div class="col-8">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('streetname') is-invalid @enderror" id="streetname" name="streetname" placeholder="streetname" value="{{ old('streetname') }}" aria-describedby="streetnameHelp" required>
                            <label for="floatingInput">Streetname</label>

                            @error('streetname')
                            <div id="streetnameHelp" class="form-text color-red">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control @error('house_number') is-invalid @enderror" id="house_number" name="house_number" placeholder="house_number" value="{{ old('house_number') }}" aria-describedby="housenumberHelp" required>
                            <label for="floatingInput">House number</label>

                            @error('house_number')
                            <div id="housenumberHelp" class="form-text color-red">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('zipcode') is-invalid @enderror" id="zipcode" name="zipcode" placeholder="zipcode" value="{{ old('zipcode') }}" pattern="[0-9]{4}[A-Za-z]{2}" aria-describedby="zipcodeHelp" maxlength="6" required>
                            <label for="floatingInput">Zipcode</label>

                            @error('zipcode')
                            <div id="zipcodeHelp" class="form-text color-red">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="city" value="{{ old('city') }}" aria-describedby="cityHelp" required>
                            <label for="floatingInput">City</label>

                            @error('city')
                            <div id="cityHelp" class="form-text color-red">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" placeholder="phone_number" value="{{ old('phone_number') }}" aria-describedby="phoneHelp" pattern="[0-9]{10}" maxlength="10" required>
                            <label for="floatingInput">Phone number</label>

                            @error('phone_number')
                            <div id="phoneHelp" class="form-text color-red">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark">Activate my account</button>
                </div>
            </div>
        </form>
    </div>
@endsection
