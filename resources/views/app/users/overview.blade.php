@extends('layouts.panel')
@section('pagename', 'Users Overview')

@section('content')
    <!--
        De ingelogde gebruiker controleren over welke type die beschikt, zodat je enkel specifieke informatie aan die type kan tonen.
        In dit geval de STUDENT, deze mag deze informatie namelijk niet inzien.
    -->
    @if(auth()->user()->user_types_id > '2')
        <div class="container no-border call-to-action">
            <div class="call-to-action-menu-one">
                <div class="text-place">
                    <h2>Our Students</h2>
                </div>
            </div>
        </div>

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
                <!--
                    De opgehaalde data uit de back-end tonen in de front-end met de tag $students, die we omzetten naar $student.
                    Dit is enkel te zien voor employees.
                -->
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
                <!-- Als er geen data te vinden is in de database, dan zegt de front-end dat er niks gevonden is. -->     
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

    <div class="container no-border call-to-action">
        <div class="call-to-action-menu-one">
            <div class="text-place">
                <h2>Our Employees</h2>
            </div>
        </div>
    </div>

    <div class="container border-bottom">
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
            <!--
                De opgehaalde data uit de back-end tonen in de front-end met de tag $employees, die we omzetten naar $employee.
                Dit is voor iedereen te zien.
            -->
            @forelse($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->firstname }} {{ $employee->lastname }}</td>
                    <td>{{ $employee->role->name }} ({{ $employee->user_types_id }})</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->created_at }}</td>
                    <td><a class="btn btn-primary btn-sm" href="mailto:{{ $employee->email }}" role="button">Send e-mail</a></td>
                </tr>
            <!-- Als er geen data te vinden is in de database, dan zegt de front-end dat er niks gevonden is. -->    
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
