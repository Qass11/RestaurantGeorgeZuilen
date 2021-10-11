@extends('layouts.app')
@section('pagename', 'Home')

@section('content')
    <div class="container border-bottom about-us">
        <div class="row">
            <div class="col-12 col-md-7">
                <h1>@lang('george.home.title') <i class="fal fa-sign-language fa-fw"></i></h1>
                <p>
                    George Zuilen is located near the Utrecht Science Park, in a three-story building of the MBO Utrecht overlooking the water, almost directly along the highway which leads to a fast connection to our location. With large windows overlooking a small piece of nature, an open kitchen and a striking bar in the middle of the restaurant, you can enjoy the most delicious dishes.
                </p>

                <p>
                    The dishes are made by experienced chefs, together with their interns. These interns are students of the MBO Utrecht who are in training for a certain position within the restaurant. George Zuilen is a great place to escape the hectic, everyday life - even if it's just for one day.
                </p>
            </div>
            <div class="col-12 col-md-5">
                <!-- CAROUSEL -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://uploads-ssl.webflow.com/5f3ece93689659d6e7431728/60d5d8dd22d367398f572580_GEORGE%20MARINA23x.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://uploads-ssl.webflow.com/5f3ece93689659d6e7431728/60d5d8dea725947dd46a1731_GEORGE%20MARINA49x.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://uploads-ssl.webflow.com/5f3ece93689659d6e7431728/611152b7638de16073131e92_Marina%20Terras%402x.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <!-- END CAROUSEL -->
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

    <div class="container border-bottom call-to-action">
        <div class="call-to-action-desc">
            <div class="text-place">
                <h2>Is it time to relax yet?</h2>
                <p data-bs-toggle="modal" data-bs-target="#bookATable">Book a table now</p>
            </div>
        </div>
    </div>

    <div class="container border-bottom testimonials">
        <div class="text-center mb-5">
            <h2>Latest reviews.</h2>
            <p>People who have had an experience at George Zuilen are often honest about their experience,<br/> below you can read our most recent reviews posted by our customers.</p>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md">
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi blanditiis consequatur deleniti dolore earum eligendi fuga fugit impedit ipsam iusto laboriosam libero minus molestiae possimus praesentium quos tempore, voluptate.
                </p>
                <p class="text-center">
                    <i class="fas fa-star"></i>
                    <i class="fal fa-star"></i>
                    <i class="fal fa-star"></i>
                    <i class="fal fa-star"></i>
                    <i class="fal fa-star"></i>
                </p>
                <p class="text-center">
                    <strong>&mdash; John Doe &mdash;</strong>
                </p>
            </div>

            <div class="col-sm-12 col-md">
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi blanditiis consequatur deleniti dolore earum eligendi fuga fugit impedit ipsam iusto laboriosam libero minus molestiae possimus praesentium quos tempore, voluptate.
                </p>
                <p class="text-center">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fal fa-star"></i>
                    <i class="fal fa-star"></i>
                </p>
                <p class="text-center">
                    <strong>&mdash; John Doe &mdash;</strong>
                </p>
            </div>
        </div>
    </div>


@endsection
