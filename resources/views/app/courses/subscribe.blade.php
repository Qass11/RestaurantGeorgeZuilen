@extends('layouts.panel')
@section('pagename', 'Courses Subscribe')


@section('content')

    <div class="container border-bottom">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <h2>FeedBack</h2>
                <p>
                    Choose a student and give hem or her a student a feedback.
                </p>
            </div>

            <div class="col-sm-12 col-md-6 ms-auto">

                @if (session()->has('success'))
                    <div class="success">
                        <strong>Yeey! <i class="far fa-smile-beam fa-fw"></i></strong>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="/subscribe" method="POST">
                    @csrf

                        <div class="form-floating mb-3">
                            <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" required>
                                <option value="">Choose a student</option>
                                <option value="lunch">Student_1</option>
                                <option value="dinner">Student_2</option>
                                <option value="drink">Student_3</option>
                            </select>
                            <label for="bookType">Wich student</label>

                            @error('type')
                            <div id="typeHelp" class="form-text color-red">
                                {{ $message }}
                            </div>
                            @enderror
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


@endsection
