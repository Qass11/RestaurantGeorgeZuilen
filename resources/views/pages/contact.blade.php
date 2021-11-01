@extends('layouts.app')
@section('pagename', 'Contact')

@section('content')
    <div class="container border-bottom">
        <div class="row">
            <div class="col-lg-7">
                <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 250px">
                    <iframe src="https://maps.google.com/maps?q=MBO Utrecht, Daltonlaan, Utrecht&t=&z=17&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0" class="map-filter" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container border-bottom text-center">
        <div class="row">
            <div class="col-sm-12 col-md">
                <h2>Parking</h2>
                <p>
                    Free parking is available on our property, with an average of 500 parking spaces available on the right side of our location. You can drive right up here and do not have to report in advance. The parking lot is monitored by security cameras. Parking is at your own risk.
                </p>
            </div>

            <div class="col-sm-12 col-md">
                <h2>Public Transport</h2>
                <p>
                    Plan your trip well in advance, our location is easily accessible by public transportation. Get off at the <b>Rijnsweerd Zuid</b> stop.
                </p>

                <a href="https://9292.nl/" target="_blank" class="btn btn-small btn-outline-dark">Plan my trip</a>
            </div>
        </div>
    </div>

    <div class="container border-bottom">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <h2>Contact us.</h2>
                <p>
                    It is always possible that you have questions or comments regarding Restaurant George Zuilen. We are always open to contact us, you can do this by using the contact options on our website or fill out the form on the right. We do our best to contact you within two working days after completing the form.
                </p>
                <p>
                    Should you contact us regarding a possible job at Restaurant George Zuilen we would like to inform you immediately that we will not respond to you from the form on the right. For that we would like to refer you to our carreers page. On that page is a form where you can fill in an open application, after filling in the form we will contact you within 5 working days.
                </p>
            </div>

            <div class="col-sm-12 col-md-6 ms-auto">

                @if (session()->has('success'))
                    <div class="success">
                        <strong>Yeey! <i class="far fa-smile-beam fa-fw"></i></strong>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="/contact" method="POST">
                    @csrf
                    
                    <div class="row">
                        <div class="col-6">
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
                        <div class="col-6">
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
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" value="{{ old('email') }}" aria-describedby="emailHelp" required>
                                <label for="floatingInput">E-mail address</label>

                                @error('email')
                                <div id="emailHelp" class="form-text color-red">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" placeholder="phone_number" value="{{ old('phone_number') }}" aria-describedby="phoneHelp" required>
                                <label for="floatingInput">Phone number</label>

                                @error('phone_number')
                                <div id="phoneHelp" class="form-text color-red">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="subject" value="{{ old('subject') }}" aria-describedby="subjectHelp" required>
                        <label for="floatingInput">Subject</label>

                        @error('subject')
                        <div id="subjectHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control motivationtext" placeholder="Leave a comment here" id="text" name="text" value="{{ old('text') }}" aria-describedby="textHelp" required></textarea>
                        <label for="text">Describe here why you are contacting George Zuilen.</label>

                        @error('text')
                        <div id="subjectHelp" class="form-text color-red">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark">Send my form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('includes.openinghours')
@endsection
