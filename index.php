<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurant George Zuilen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.2/css/all.css" type="text/css">
    <link rel="stylesheet" href="./src/css/main.css" type="text/css">
</head>
<body>

<?php
include('./src/inc/book-a-table.php');
?>

<!--    <div class="loader" id="loader">-->
<!--        <div class="text-loading" id="preloader">-->
<!--            <h3><span>George</span> Zuilen</h3>-->
<!--        </div>-->
<!--    </div>-->

    <div class="container border-bottom header-bar">
        <a href="#" class="george-logo">George</a>

        <ul>
            <li>
                <a class="nav-link" href="./index.php"><i class="fal fa-home fa-fw"></i> Home</a>
            </li>
            <li>
                <a class="nav-link" href="./about-us.php"><i class="fal fa-users fa-fw"></i> About us</a>
            </li>
            <li>
                <a class="nav-link" href="./menu.php"><i class="fal fa-utensils-alt fa-fw"></i> Menu</a>
            </li>
            <li>
                <a class="nav-link" href="./book-event.php"><i class="fal fa-glass-cheers fa-fw"></i> Events</a>
            </li>
            <li>
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#bookATable"><i class="fal fa-calendar-plus fa-fw"></i> Book a table</a>
            </li>
            <li>
                <a class="nav-link" href="./contact.php"><i class="fal fa-paper-plane fa-fw"></i> Contact</a>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="alert alert-dismissible fade show text-center" role="alert">
            <a href="#">Click here for the latest covid-19 updates</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>

    <div class="container border-bottom about-us">
        <div class="row">
            <div class="col-12 col-md-7">
                <h1>Hello, we are George Zuilen! <i class="fal fa-sign-language fa-fw"></i></h1>
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
                <p><strong>Maandag</strong></p>
                <p>10:00 &mdash; 20:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Dinsdag</strong></p>
                <p>10:00 &mdash; 20:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Woensdag</strong></p>
                <p>10:00 &mdash; 20:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Donderdag</strong></p>
                <p>10:00 &mdash; 20:00</p>
            </div>
            <div class="col-sm-12 col-md">
                <i class="fal fa-clock fa-fw icon-george"></i>
                <p><strong>Vrijdag</strong></p>
                <p>10:00 &mdash; 20:00</p>
            </div>
        </div>
    </div>

    <div class="container border-bottom call-to-action">
        <div class="call-to-action-desc">
            <div class="text-place">
                <h2>Is it time to relax yet?</h2>
                <p>Book a table now</p>
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
                <p>
                    <img class="avatar" src="https://images.unsplash.com/photo-1520423465871-0866049020b7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60">
                    <strong>John Doe</strong>
                    <small>Function / Company</small>
                </p>
            </div>

            <div class="col-sm-12 col-md">
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi blanditiis consequatur deleniti dolore earum eligendi fuga fugit impedit ipsam iusto laboriosam libero minus molestiae possimus praesentium quos tempore, voluptate.
                </p>
                <p>
                    <img class="avatar" src="https://images.unsplash.com/photo-1520423465871-0866049020b7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=60">
                    <strong>John Doe</strong>
                    <small>Function / Company</small>
                </p>
            </div>
        </div>
    </div>

    <div class="container border-bottom text-center">
        <div class="row">
            <div class="col-sm-12 col-md socials">
                <h2>Our Location.</h2>
                <p>
                    We are located in a beautiful location of the MBO Utrecht, near Utrecht Sciene Park, accessible by car, bicycle and public transport.
                </p>
                <div class="row">
                    <div class="col-sm-12 col-md">
                        <i class="fal fa-map-marked-alt fa-fw icon-george"></i>
                        <strong>Location</strong>
                        Daltonlaan 300, 3584 BK Utrecht
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md socials">
                <h2>Our Socials.</h2>
                <p>
                    Always be the first to know about updates and actions at George Zuilen, follow our social media channels.
                </p>
                <div class="row">
                    <div class="col-sm-12 col-md">
                        <i class="fal fa-hashtag fa-fw icon-george"></i>
                        <strong>Twitter</strong>
                        @georgezuilen
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md socials">
                <h2>Contact.</h2>
                <p>
                    Have questions or want to discuss certain opportunities with our team? Please feel free to contact us.
                </p>
                <div class="row">
                    <div class="col-sm-12 col-md">
                        <i class="fal fa-at fa-fw icon-george"></i>
                        <strong>E-mail</strong>
                        hello@georgezuilen.nl
                    </div>

                    <div class="col-sm-12 col-md">
                        <i class="fal fa-phone-office fa-fw icon-george"></i>
                        <strong>Phone</strong>
                        030 12 34 56 7
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container no-border text-center">
        <p>&copy; 2021 George Zuilen</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="./src/js/main.js"></script>
</body>
</html>