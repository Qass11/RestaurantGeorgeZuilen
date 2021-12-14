@extends('layouts.panel')
@section('pagename', 'Reservations Overview')

@section('content')
    <div class="container border-bottom">
        <h1>Reservations</h1>
        <p class="mb-3">
            Below you can see an overview of all reservations made in the past period.
        </p>
        <table class="table table-striped table-hover align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">type</th>
                    <th scope="col">persons</th>
                    <th scope="col">date</th>
                    <th scope="col">time</th>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">email</th>
                    <th scope="col">phone_numebr</th>
                    <th scope="col">comments</th>
                    <th scope="col">advertising</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reservations as $reservation)
                    <tr>
                        <th scope="row">{{ $reservation->id }}</th>
                        <td>{{ $reservation->type }}</td>
                        <td>{{ $reservation->persons }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td>{{ $reservation->time }}</td>
                        <td>{{ $reservation->firstname }}</td>
                        <td>{{ $reservation->lastname }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->phone_number }}</td>
                        <td>{{ $reservation->comments }}</td>
                        <td>{{ $reservation->advertising }}</td>
                    </tr>
                @empty
                    <tr>
                        <th scope="row">#</th>
                        <td>Nothing to show</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
