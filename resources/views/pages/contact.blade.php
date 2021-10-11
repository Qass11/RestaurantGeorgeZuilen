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

    <div class="container border-bottom text-center opening-hours">
        <h2>Opening Hours.</h2>
        <p>Every working day you are welcome in our restaurant, below you can see all our opening hours.</p>
        <div class="row">
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Monday</strong></p>
                <p>18:00 &mdash; 21:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Tuesday</strong></p>
                <p>18:00 &mdash; 21:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Wednesday</strong></p>
                <p>18:00 &mdash; 21:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Thursday</strong></p>
                <p>18:00 &mdash; 21:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Friday</strong></p>
                <p>18:00 &mdash; 21:00</p>
            </div>
        </div>
    </div>
@endsection
