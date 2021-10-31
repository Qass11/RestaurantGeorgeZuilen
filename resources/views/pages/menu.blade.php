@extends('layouts.app')
@section('pagename', 'Our Menu')

@section('content')
    <div class="container no-border call-to-action">
        <div class="call-to-action-menu-one">
            <div class="text-place">
                <h2>Our Menu</h2>
            </div>
        </div>
    </div>

    <div class="container border-bottom menu">

        <div class="row">

            @foreach($categories as $categorie)
                <div class="col-sm-12 col-md-6">
                    <h4>{{ $categorie->name }}</h4>
                    <p>{{ $categorie->description }}</p>

                    <ul class="leaders">
                        @forelse($categorie->Items as $item)
                            <li>
                                <span class="strong">{{ $item->name }}</span>
                                <span>&euro; {{ $item->price }}</span>
                                <div class="extra-info">{{ $item->description }}</div>
                            </li>

                        @empty
                            There are no items to show.
                        @endforelse
                    </ul>
                </div>
            @endforeach

        </div>


        <div class="quote text-center">
            <h3>George &#9825; Veggies</h3>
            <div class="text">
                Whether you’re vegetarian, vegan or ‘veggie curious’, you will find a number of carefully selected vegetarian
                and plant based items on our menu. The vegetarian dishes speak for themselves in the description.
                Our plant based dishes are marked with a . Any questions? Just ask our staff!
            </div>
        </div>

    </div>
@endsection
