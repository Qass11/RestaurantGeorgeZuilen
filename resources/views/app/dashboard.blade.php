@extends('layouts.panel')
@section('pagename', 'Dashboard')

@section('content')
    @auth
        <p>Welkom {{ auth()->user()->firstname }}!</p>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit">logout</button>
        </form>
    @endauth
@endsection
