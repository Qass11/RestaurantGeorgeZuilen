@extends('layouts.panel')
@section('pagename', 'Courses Subscribe')

@section('content')
    
        <div class="container border-bottom">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <h2>Information</h2>
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

                    <form action="/message" method="POST">
                        @csrf

                        <div class="row">
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
                            <label for="text">Describe here why you are contacting.</label>

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
    </div>
@endsection
