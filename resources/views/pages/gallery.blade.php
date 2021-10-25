@extends('layouts.app')
@section('pagename', 'Our Careers')

@section('content')
    <div class="container border-bottom text-center">
        <h1>Our Gallery</h1>
        <p>
            Below you'll see our gallery of photos we're proud of. This gallery can give you an impression about your visit to George Zuilen.
        </p>

        <div class="row row-cols-1 row-cols-md-3 g-4 gallery">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/booktable.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/booktable.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/booktable.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/booktable.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/booktable.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/booktable.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
