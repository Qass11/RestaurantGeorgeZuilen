@extends('layouts.app')
@section('pagename', 'Home')

@section('content')
<<<<<<< Updated upstream
=======
    <div class="container border-bottom text-center controller">
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
>>>>>>> Stashed changes

    <footer>
        <p id="logo">Mboutrecht-Ict-Acadimie</p>
    </footer>
    <div class="container mt-3 img-header">
    <div class="row mb-3">
        <div class="col-sm-12 col-md-12">
            <strong class="style-letter">MBO</strong>
        </div>
        <div class="col-sm-12 col-md-12 text-center">
            <strong class="style-letter">UTRECHT</strong>
        </div>
        <div class="col-sm-12 col-md-12 text-end">
            <strong class="style-letter">2021</strong>
        </div>
    </div>
    </div>

    <div class="row text-center">
        <div class="col-sm-12 col-md-12 mt-4 mb-5 naam">
            <a href="#"><h2 class="zicht">Dani Al Jumaat</h2></a>
            <img src="{{asset('/images/test-image.jpg')}}">
        </div>
        <div class="col-sm-12 col-md-12 mb-5 naam">
            <a href="#"><h2 class="zicht">Mohammed Loul</h2></a>
            <img src="{{asset("/images/Mohammed.jpg")}}">
        </div>
        <div class="col-sm-12 col-md-12 mb-5 naam">
            <a href="#"><h2 class="zicht">Quassim kurdi</h2></a>
            <img src="{{asset('/images/Qassim.jpeg')}}">
        </div>
        <div class="col-sm-12 col-md-12 mb-5 naam">
            <a href="#"><h2 class="zicht">Mitchel Jansen</h2></a>
            <img src="./img/test.jpeg">
        </div>
    </div>
    @endsection