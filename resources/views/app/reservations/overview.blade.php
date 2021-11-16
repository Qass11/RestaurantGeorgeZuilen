@extends('layouts.panel')
@section('pagename', 'Reservations Overview')

@section('content')
    <div class="container border-bottom">
        @forelse($reservations as $reservation)
            {{ $reservation->id }}
            {{ $reservation->type }}
        @empty
            Nothing to show
        @endforelse
    </div>
@endsection
