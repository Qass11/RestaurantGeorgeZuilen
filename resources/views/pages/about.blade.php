@extends('layouts.app')
@section('pagename', 'About Us')

@section('content')
    <div class="container border-bottom about-us">
        <div class="row">
            <div class="col-sm-12 col-md-6 mb-3">
                <img src="{{ asset('images/about-one.jpg') }}" class="about-image" alt="The recent success">
                <h2>Our Start.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium alias dolorum illo laborum porro unde veritatis voluptate? Alias atque autem blanditiis impedit ipsa quidem sed sint totam veniam voluptate!
                </p>
            </div>

            <div class="col-sm-12 col-md-6 mb-3">
                <img src="{{ asset('images/about-two.jpg') }}" class="about-image" alt="The recent success">
                <h2>Our Mission.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium alias dolorum illo laborum porro unde veritatis voluptate? Alias atque autem blanditiis impedit ipsa quidem sed sint totam veniam voluptate!
                </p>
            </div>

            <div class="col-sm-12 col-md-6">
                <img src="{{ asset('images/about-three.jpeg') }}" class="about-image" alt="The recent success">
                <h2>Our Success.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium alias dolorum illo laborum porro unde veritatis voluptate? Alias atque autem blanditiis impedit ipsa quidem sed sint totam veniam voluptate!
                </p>
            </div>

            <div class="col-sm-12 col-md-6">
                <img src="{{ asset('images/about-four.jpg') }}" class="about-image" alt="The recent success">
                <h2>MBO Utrecht.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium alias dolorum illo laborum porro unde veritatis voluptate? Alias atque autem blanditiis impedit ipsa quidem sed sint totam veniam voluptate!
                </p>
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

    @include('includes.openinghours')
@endsection
