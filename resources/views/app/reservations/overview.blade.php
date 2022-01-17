@extends('layouts.panel')
@section('pagename', 'Reservations Overview')

@section('content')
    <div class="container border-bottom">
        <table class="table">
            <thead>
{{--            De kolomen dat de klant zijn gegevens invult--}}
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

{{--            Dit haalt de gegevens uit de database--}}
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
<<<<<<< Updated upstream
                    Nothing to show
=======
{{--                    Als boven opgehaald is en niks te zien is dan zegt dat het niks te zien--}}
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
>>>>>>> Stashed changes
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
