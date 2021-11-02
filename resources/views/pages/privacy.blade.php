@extends('layouts.app')
@section('pagename', 'Home')

@section('content')
    <div class="container border-bottom about-us text-center">
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <img src="{{ asset('images/img.png') }}" class="about-image" alt="Description about image">
                <h2>Our Start.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium alias dolorum illo laborum porro unde veritatis voluptate? Alias atque autem blanditiis impedit ipsa quidem sed sint totam veniam voluptate!                </p>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <img src="{{ asset('images/img_2.png') }}" class="about-image" alt="Description about image">
                <h2>Log file information</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium alias dolorum illo laborum porro unde veritatis voluptate? Alias atque autem blanditiis impedit ipsa quidem sed sint totam veniam voluptate!                </p>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <img src="{{ asset('images/img_3.png') }}" class="about-image" alt="Description about image">
                <h2>Legal requests and preventing harm</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium alias dolorum illo laborum porro unde veritatis voluptate? Alias atque autem blanditiis impedit ipsa quidem sed sint totam veniam voluptate!                </p>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <img src="{{ asset('images/img_1.png') }}" class="about-image" alt="Description about image">
                <h2>Safety and security</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium alias dolorum illo laborum porro unde veritatis voluptate? Alias atque autem blanditiis impedit ipsa quidem sed sint totam veniam voluptate!                </p>
            </div>



            </div>
        </div>

    @endsection
