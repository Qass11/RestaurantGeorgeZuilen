@extends('layouts.panel')
@section('pagename', 'Users Overview')

@section('content')
    @if(auth()->user()->user_types_id > '2')
        <div class="container border-bottom">
            <h1>Students</h1>
            <table class="table table-striped table-hover align-middle">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Role</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->firstname }} {{ $student->lastname }}</td>
                        <td>{{ $student->role->name }} ({{ $student->user_types_id }})</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone_number }}</td>
                        <td>{{ $student->created_at }}</td>
                        <td><a class="btn btn-primary btn-sm" href="mailto:{{ $student->email }}" role="button">Send e-mail</a></td>
                    </tr>
                @empty
                    <tr>
                        <th scope="row">#</th>
                        <td>Nothing to show.</td>
                        <td>Nothing to show.</td>
                        <td>Nothing to show.</td>
                        <td>Nothing to show.</td>
                        <td>Nothing to show.</td>
                        <td>Nothing to show.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    @endif

    <div class="container border-bottom">
        <h1>Employees</h1>
        <p class="mb-3">
            Below you will see all available tutors within your program, within this form you can use the action
            button to send an email directly to an available tutor.
        </p>
        <table class="table table-striped table-hover align-middle">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fullname</th>
                <th scope="col">Role</th>
                <th scope="col">E-mail</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->firstname }} {{ $employee->lastname }}</td>
                    <td>{{ $employee->role->name }} ({{ $employee->user_types_id }})</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->created_at }}</td>
                    <td><a class="btn btn-primary btn-sm" href="mailto:{{ $employee->email }}" role="button">Send e-mail</a></td>
                </tr>
            @empty
                <tr>
                    <th scope="row">#</th>
                    <td>Nothing to show.</td>
                    <td>Nothing to show.</td>
                    <td>Nothing to show.</td>
                    <td>Nothing to show.</td>
                    <td>Nothing to show.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
