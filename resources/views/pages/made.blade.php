@extends('layouts.app')
@section('pagename', 'Our Developers')

@section('content')
    <div class="container border-bottom text-center">
        <h1>Our Developers</h1>
        <p class="bottom-space">
            Below is our team of Developers at Restaurant George Zuilen.
        </p>
        <div class="row">
            <div class="col-sm-4 col-md">
                <img src="{{ asset('images/test-image.jpg') }}" class="img-fluid employee">
                <h5 class="empname">Dani al Jumaat</h4>
                    <p class="function">Developer</p>
            </div>

            <div class="col-sm-4 col-md">
                <img src="{{ asset('images/Mohammed.jpg') }}" class="img-fluid employee">
                <h5 class="empname">Mohammed Loul</h4>
                    <p class="function">Developer</p>
            </div>

            <div class="col-sm-4 col-md">
                <img src="{{ asset('images/Qassim.jpeg') }}" class="img-fluid employee">
                <h5 class="empname">Qassim Kurdi</h4>
                    <p class="function">Developer</p>
            </div>

            <div class="col-sm-4 col-md">
                <img src="{{ asset('images/mitchel.jpg') }}" class="img-fluid employee">
                <h5 class="empname">Mitchel Jansen</h4>
                    <p class="function">Developer</p>
            </div>
        </div>
    </div>
 @endsection