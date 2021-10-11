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

    <div class="container border-bottom text-center opening-hours">
        <h2>Opening Hours.</h2>
        <p>Every working day you are welcome in our restaurant, below you can see all our opening hours.</p>
        <div class="row">
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Monday</strong></p>
                <p>10:00 &mdash; 20:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Tuesday</strong></p>
                <p>10:00 &mdash; 20:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Wednesday</strong></p>
                <p>10:00 &mdash; 20:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Thursday</strong></p>
                <p>10:00 &mdash; 20:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Friday</strong></p>
                <p>10:00 &mdash; 20:00</p>
            </div>
        </div>
    </div>
@endsection
