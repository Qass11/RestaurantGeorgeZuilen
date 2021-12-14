@extends('layouts.panel')
@section('pagename', 'Courses Overview')

@section('content')
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
                        <p class="title">{{ $course->name }}</p>
                        <p class="description">{{ $course->description }}</p>
                        <p class="info">
                            Below is the breakdown in terms of the number
                            of evenings with<br/> which lesson package you will be working.
                        </p>

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

                        <form action="courses/subscribe" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="courses_id" value="{{ $course->id }}">
                            <button type="submit" class="btn btn-sm btn-outline-dark">Choose for this course</button>
                        </form>
                    </div>
                @empty
                    Nothing to show.
                @endforelse
            </div>
        </div>
    @elseif(auth()->user()->check_course == '1' && auth()->user()->user_types_id < '3')
        Kies hier je werkuren.
    @elseif(auth()->user()->user_types_id > '2' && auth()->user()->user_types_id < '6')
        Qassim, hier de front-end voor de docenten om een werkdag te kiezen.
    @elseif(auth()->user()->user_types_id > '1' && auth()->user()->user_types_id < '3')
        Qassim, hier de front-end voor de studenten om een werkdag te kiezen.
    @else
        Dit vullen we later op.
    @endif

@endsection
