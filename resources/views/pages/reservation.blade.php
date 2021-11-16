@extends('layouts.app')
@section('pagename', 'Reservation')

@section('content')

    <div class="container no-border call-to-action">
        <div class="call-to-action-menu-one">
            <div class="text-place">
                <h2>Book a table</h2>
            </div>
        </div>
    </div>

    <div class="container border-bottom">

        @if (session()->has('success'))
            <div class="success">
                <strong>Yeey! <i class="far fa-smile-beam fa-fw"></i></strong>
                {{ session('success') }}
            </div>
        @endif

        <form action="/reservation" method="POST">
            @csrf
            <div class="row">

                <div class="col-sm-12 col-md-12">
                    <h1>Reservation details</h1>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" required>
                            <option value="">Make a choice</option>
                            <option value="lunch">Lunch</option>
                            <option value="dinner">Dinner</option>
                            <option value="drink">Only Drink</option>
                        </select>
                        <label for="bookType">Type of reservation</label>

                        @error('type')
                            <div id="typeHelp" class="form-text color-red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select @error('persons') is-invalid @enderror" id="persons" name="persons" required>
                            <option value="">Make a choice</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <label for="bookPerson">How many persons?</label>

                        @error('persons')
                        <div id="personsHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="date" min="01-01-2021" max="01-01-2023" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="04-10-2021" required>
                        <label for="bookDate">Date</label>

                        @error('date')
                        <div id="dateHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="time" min="18:00" max="21:00" class="form-control @error('time') is-invalid @enderror" id="time" name="time" placeholder="14:15" required>
                        <label for="bookDate">Time</label>

                        @error('time')
                        <div id="timeHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 mt-2">
                    <h1>Personal details</h1>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="firstname" value="{{ old('firstname') }}" required>
                        <label for="bookFirstname">Firstname</label>

                        @error('firstname')
                        <div id="firstnameHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="lastname" value="{{ old('lastname') }}" required>
                        <label for="bookLastname">Lastname</label>

                        @error('lastname')
                        <div id="lastnameHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" value="{{ old('email') }}" required>
                        <label for="bookMail">E-mail adress</label>

                        @error('email')
                        <div id="emailHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" placeholder="phone" value="{{ old('phone_number') }}" required>
                        <label for="bookPhone">Phone number</label>

                        @error('phone_number')
                        <div id="phone_numberHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="form-floating mb-3">
                        <textarea class="form-control booktext @error('comments') is-invalid @enderror" placeholder="Leave a comment here" id="comments" name="comments" height></textarea>
                        <label for="bookInformation">Do you have important dietary requirements, allergies or other remarks?</label>

                        @error('comments')
                        <div id="commentsHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="form-floating mb-3">
                        <select class="form-select @error('advertising') is-invalid @enderror" id="advertising" name="advertising" required>
                            <option value="">Make a choice</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <label for="advertising">Would you like to receive advertising?</label>

                        @error('advertising')
                        <div id="advertisingHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="submit">Book now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
