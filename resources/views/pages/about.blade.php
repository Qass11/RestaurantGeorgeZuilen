@extends('layouts.app')
@section('pagename', 'About Us')

@section('content')
    <div class="container border-bottom about-us">
        <div class="row">
            <div class="col-12 col-md-7">
                <h1>How the restaurant began</h1>
                <p>Many have come and gone, but George’s is still here, for 80 years and counting. The original building, consisting of the bar area with a small kitchen in back, began in 1930 as “Harry B’s,” named after owner Harry Urmeister. Harry was a founding member of the Nose Brothers organization, a long-standing Baylor tradition. An avid sportsman, he developed a strong relationship with Baylor athletics, pairing the two together for all these years. George Betros bought Harry B’s in 1966 and changed the name to “George’s.” It was at this time that our most famous drink, the “Big O™,” received its name. A waitress by the name of Lucille Brown called them Big Oranges, the rest of the staff shortened it to “Big O™,” and it stuck!</p>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('images/about-one.jpg') }}" class="about-image" alt="How the restaurant began">
            </div>
        </div>
    </div>

    <div class="container border-bottom about-us">
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('images/about-two.jpg') }}" class="about-image" alt="What is our mission?">
            </div>
            <div class="col-12 col-md-7">
                <h1>What is our mission?</h1>
                <p>Serving you iconic dishes and timeless classics with New York, Paris, the Côte d'Azur and Hong Kong in mind, along with local ingredients, freshly roasted coffee and signature cocktails, our restaurants are open all day, every day –  so come join us for an early morning espresso, a lazy Sunday brunch or an intimate dinner with friends in a relaxed, elegant atmosphere.</p>
            </div>

        </div>
    </div>

    <div class="container border-bottom about-us">
        <div class="row">
            <div class="col-12 col-md-7">
                <h1>The recent success</h1>
                <p>Most of our restaurants are designed by Amsterdam based Architecture & Design studio Framework, who signed for our bespoke interiors and sophisticated yet intimate ambiance, featuring typical George elements like metro tiles, lush leather couches, brass lighting, and marble bars. With each location having its own charm, your visit to George quite literally is a feast for your eyes and taste buds.  Most of our locations have stunning, sunny terraces and are open all day, every day for breakfast, lunch and dinner.</p>
            </div>
            <div class="col-12 col-md-5">
                <img src="{{ asset('images/about-three.jpeg') }}" class="about-image" alt="The recent success">
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
