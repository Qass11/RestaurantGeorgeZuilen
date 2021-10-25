@extends('layouts.app')
@section('pagename', 'About Us')

@section('content')
<div class="container border-bottom">
    <form action="/create_account" method="POST">

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Firstname</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
            @error('firstname')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
            @error('lastname')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password')
                <p>{{ $message }}</p>
                @enderror
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
