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

    <!--<div class="loader" id="loader">-->
    <!--    <div class="text-loading" id="preloader">-->
    <!--        <h3><span>George</span> Zuilen</h3>-->
    <!--    </div>-->
    <!--</div>-->

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

    <div class="container border-bottom about-us">
        <div class="row">
            <div class="col-12 col-md-7">
                <h1>How the restaurant began</h1>
                <p>
                Many have come and gone, but George’s is still here, for 80 years and counting. The original building, consisting of the bar area with a small kitchen in back, began in 1930 as “Harry B’s,” named after owner Harry Urmeister. Harry was a founding member of the Nose Brothers organization, a long-standing Baylor tradition. An avid sportsman, he developed a strong relationship with Baylor athletics, pairing the two together for all these years.

George Betros bought Harry B’s in 1966 and changed the name to “George’s.” It was at this time that our most famous drink, the “Big O™,” received its name. A waitress by the name of Lucille Brown called them Big Oranges, the rest of the staff shortened it to “Big O™,” and it stuck!</p>

                </p>
            </div>
            <div class="col-12 col-md-5">
                <img src="./src/img/eigennaar.jpg" class="about-image">
            </div>
        </div>
    </div>

    <div class="container border-bottom about-us">
        <div class="row">
        <div class="col-12 col-md-5">
                <img src="./src/img/22222.jpg" class="about-image">
            </div>
            <div class="col-12 col-md-7">
                <h1>What the mission is</h1>
                <p>
                Serving you iconic dishes and timeless classics with New York, Paris, the Côte d'Azur and Hong Kong in mind, along with local ingredients, freshly roasted coffee and signature cocktails, our restaurants are open all day, every day –  so come join us for an early morning espresso, a lazy Sunday brunch or an intimate dinner with friends in a relaxed, elegant atmosphere.
                </p>
            </div>
        
        </div>
    </div>

    <div class="container border-bottom about-us">
        <div class="row">
            <div class="col-12 col-md-7">
                <h1>The recent success</h1>
                <p>
                Most of our restaurants are designed by Amsterdam based Architecture & Design studio Framework, who signed for our bespoke interiors and sophisticated yet intimate ambiance, featuring typical George elements like metro tiles, lush leather couches, brass lighting, and marble bars. With each location having its own charm, your visit to George quite literally is a feast for your eyes and taste buds.

                          Most of our locations have stunning, sunny terraces and are open all day, every day for breakfast, lunch and dinner.
                </p>
            </div>
            <div class="col-12 col-md-5">
                <img src="./src/img/3333333.jpg" class="about-image">
            </div>
        </div>
    </div>

    <div class="container border-bottom text-center">
        <h1>Our Employees</h1>
        <p class="bottom-space">
        We at George Zuilen are grateful to our hard working employees every day<br/> for the success they achieve. Below you will see a sampling of our employees.
        </p>
        <div class="row">
            <div class="col-sm-4 col-md">
                <img src="https://randomuser.me/api/portraits/men/97.jpg" class="img-fluid employee">
                <h5 class="empname">Employee Name</h4>
                <p class="function">Function</p>
            </div>

            <div class="col-sm-4 col-md">
                <img src="https://uifaces.co/our-content/donated/3799Ffxy.jpeg" class="img-fluid employee">
                <h5 class="empname">Employee Name</h4>
                <p class="function">Function</p>
            </div>

            <div class="col-sm-4 col-md">
                <img src="https://images.pexels.com/photos/247917/pexels-photo-247917.jpeg?crop=faces&fit=crop&h=200&w=200&auto=compress&cs=tinysrgb" class="img-fluid employee">
                <h5 class="empname">Employee Name</h4>
                <p class="function">Function</p>
            </div>

            <div class="col-sm-4 col-md">
                <img src="https://images.pexels.com/photos/1065084/pexels-photo-1065084.jpeg?auto=compress&cs=tinysrgb&crop=faces&fit=crop&h=200&w=200" class="img-fluid employee">
                <h5 class="empname">Employee Name</h4>
                <p class="function">Function</p>
            </div>

            <div class="col-sm-4 col-md">
                <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&crop=faces&fit=crop&h=200&w=200" class="img-fluid employee">
                <h5 class="empname">Employee Name</h4>
                <p class="function">Function</p>
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