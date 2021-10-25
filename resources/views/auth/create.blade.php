@extends('layouts.app')
@section('pagename', 'About Us')

@section('content')
<div class="container border-bottom">
    <form action="/create_account" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Firstname</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
