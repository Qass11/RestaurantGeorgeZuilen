@extends('layouts.panel')
@section('pagename', 'Reservations Overview')

@section('content')
    <div class="container border-bottom">
        @forelse($reservations as $reservation)
            {{ $reservation->id }}
            {{ $reservation->type }}
            {{ $reservation->persons }}
            {{ $reservation->date }}
            {{ $reservation->time }}
            {{ $reservation->firstname }}
            {{ $reservation->lastname }}
            {{ $reservation->email }}
            {{ $reservation->phone_number }}
            {{ $reservation->comments }}
            {{ $reservation->advertising }}
        @empty
            Nothing to show
        @endforelse
    </div>
@endsection
