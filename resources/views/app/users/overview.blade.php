@extends('layouts.panel')
@section('pagename', 'Users Overview')

@section('content')
    <div class="container border-bottom">
        Users Overview
    </div>

    <div class="container border-bottom">
        <h1>Students</h1>
        @forelse($students as $student)
            {{ $student->id }}
            {{ $student->role->name }} ({{ $student->user_types_id }})
            {{ $student->firstname }}
            {{ $student->lastname }}
            {{ $student->email }}
            {{ $student->phone_number }}
            {{ $student->created_at }}
        @empty
            Nothing to show
        @endforelse
    </div>

    <div class="container border-bottom">
        <h1>Employees</h1>
        @forelse($employees as $employee)
            {{ $employee->id }}
            {{ $employee->role->name }} ({{ $employee->user_types_id }})
            {{ $employee->firstname }}
            {{ $employee->lastname }}
            {{ $employee->email }}
            {{ $employee->phone_number }}
            {{ $employee->created_at }}
        @empty
            Nothing to show
        @endforelse
    </div>
@endsection
