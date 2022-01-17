@extends('layouts.panel')
@section('pagename', 'Courses Overview')

@section('content')
{{--            hier wordt de gekijken of de student heeft niet een pakket gekozen en of hij echt als student ingelogd--}}
    @if(auth()->user()->check_course == '0' && auth()->user()->user_types_id < '3')
        <div class="container no-border call-to-action mb-3">
            <div class="call-to-action-menu-one">
                <div class="text-place">
                    <h2>Our Courses</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
{{--                hier wordt de data uit de database gehaald en icons for elke type user gezet--}}
                @forelse($courses as $course)
                    <div class="col-sm-12 col-md-6 course-overview">
                        @if($course->name == "General")
                            <i class="fal fa-utensils-alt fa-fw"></i>
                        @elseif($course->name == "Bartender")
                            <i class="fal fa-glass-whiskey-rocks fa-fw"></i>
                        @elseif($course->name == "Waiter")
                            <i class="fal fa-concierge-bell fa-fw"></i>
                        @elseif($course->name == "Chef")
                            <i class="fal fa-hat-chef fa-fw"></i>
                        @endif
{{--                        daarna halen wij uit de database de courses name en description--}}
                        <p class="title">{{ $course->name }}</p>
                        <p class="description">{{ $course->description }}</p>
                        <p class="info">
                            Below is the breakdown in terms of the number
                            of evenings with<br/> which lesson package you will be working.
                        </p>

{{--                            hier wordt de aantal uren van elke pakket uit de database behaald--}}
                        <div class="prices mb-3">
                            <div class="row">
                                <div class="col">
                                    <span>Chef</span>
                                    <span>{{ $course->lessons_chef }}</span>
                                </div>

                                <div class="col">
                                    <span>Bartender</span>
                                    <span>{{ $course->lessons_bartender }}</span>
                                </div>

                                <div class="col">
                                    <span>Waiter</span>
                                    <span>{{ $course->lessons_waiter }}</span>
                                </div>
                            </div>
                        </div>

{{--                            hier sturen wij de form met post method naar subscribe paginas--}}
                        <form action="courses/subscribe" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="courses_id" value="{{ $course->id }}">
                            <button type="submit" class="btn btn-sm btn-outline-dark">Choose for this course</button>
                        </form>
                    </div>
{{--                    als de database is leeg en geen enkele veld toegevoegd dan krijgt de gebruiker dat te zien--}}
                @empty
                    Nothing to show.
                @endforelse
            </div>
        </div>
{{--        Als de veld check_course op 1 staat dan krijgt de gebruiker het volgende te zien--}}
    @elseif(auth()->user()->check_course == '1' && auth()->user()->user_types_id < '3')
        Kies hier je werkuren.
{{--        Wanneer de gebruiker een docent, begeleider of eigenaar is, dan krijgt hij bovenstaande informatie niet te zien,
    hij ziet dan enkel de informatie die voor hem bestemd is. Dit is NIET zichtbaar voor studenten.--}}
    @elseif(auth()->user()->user_types_id > '2' && auth()->user()->user_types_id < '6')
        je bent een docent.
    @else
        Hier ben je niet welkom.
    @endif

@endsection
