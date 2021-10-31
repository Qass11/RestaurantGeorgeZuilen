@extends('layouts.app')
@section('pagename', 'Our Beauty')

@section('content')
    <div class="container border-bottom text-center">
        <h1>@lang('george.gallery.title')</h1>
        <p>@lang('george.gallery.description')</p>

        <div class="row row-cols-1 row-cols-md-3 g-4 gallery text-center">
            @forelse($gallery as $data)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $data->imageUrl }}" class="card-img-top" alt="{{ $data->description }}">
                        <div class="card-body">
                            <p class="card-text">{{ $data->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-sm-12 col-md-12 text-center nothing">
                    @lang('george.gallery.nothing')
                </div>
            @endforelse
        </div>
    </div>
@endsection
