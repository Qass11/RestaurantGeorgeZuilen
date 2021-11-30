@extends('layouts.panel')
@section('pagename', 'Courses Overview')

@section('content')
    <div class="container mt-3 pb-5">
        <h1 class="text-corona text-center">Courses</h1>
        <div class="row">
            <!-- de eertste card -->
            <div class="col-sm-3 col-md-3">
                <form action="courses/subscribe" method="post">
                    @csrf
                    <div class="card">
                        <img src="{{ asset('images/general.jpg') }}" style="height: 200px" class="img-fluid" alt="...">
                        <div class="card-body">

                            <h3>{{$courses[0]->name}}</h3>
                            <p class="card-text">{{ $courses[0]->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <br>
                            <h5 class="text-center">Aantal avonden:</h5>
                            <li class="list-group-item">Lessons-Chef:<span class="text-primary"> {{ $courses[0]->lessons_chef }}</span></li>
                            <li class="list-group-item">Lessons-Bartender<span class="text-primary"> {{$courses[0]->lessons_bartender}}</span></li>
                            <li class="list-group-item">Lessons-Waiter:<span class="text-primary"> {{$courses[0]->lessons_waiter}}</span></li>
                        </ul>
                        <input type="hidden" name="courses_id" value="{{$courses[0]->id}}">
                        <button type="submit" class="btn btn-dark my-2">Choose for this pakket</button>
                    </div>
                </form>
            </div>

            <!-- de tweede card -->
            <div class="col-sm-3 col-md-3">
                <form action="courses/subscribe" method="post">
                    @csrf
                    <div class="card">
                        <img src="{{ asset('images/bartender.jpg') }}" style="height: 200px" class="img-fluid" alt="...">
                        <div class="card-body">
                            <h3>{{$courses[1]->name}}</h3>                            <p class="card-text">{{$courses[1]->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <br>
                            <h5 class="text-center">Aantal avonden:</h5>
                            <li class="list-group-item">Lessons-Chef:<span class="text-danger">{{$courses[1]->lessons_chef}}</span></li>
                            <li class="list-group-item">Lessons-Bartender<span class="text-danger"> {{$courses[1]->lessons_bartender}}</span></li>
                            <li class="list-group-item">Lessons-Waiter:<span class="text-danger"> {{$courses[1]->lessons_waiter}}</span></li>
                        </ul>
                        <input type="hidden" name="courses_id" value="{{$courses[1]->id}}">
                        <button type="submit" class="btn btn-dark my-2">Choose for this pakket</button>
                    </div>
                </form>
            </div>

            <!-- de derde card -->
            <div class="col-sm-3 col-md-3">
                <form action="courses/subscribe" method="post">
                    @csrf
                    <div class="card">
                        <img src="{{ asset('images/waiter.jpg') }}" class="img-fluid"  style="height: 200px" alt="...">
                        <div class="card-body">
                            <h3>{{$courses[2]->name}}</h3>                            <p class="card-text">{{$courses[2]->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <br>
                            <h5 class="text-center">Aantal avonden:</h5>
                            <li class="list-group-item">Lessons-Chef:<span class=""> {{$courses[2]->lessons_chef}}</span></li>
                            <li class="list-group-item">Lessons-Bartender<span class=""> {{$courses[2]->lessons_bartender}}</span></li>
                            <li class="list-group-item">Lessons-Waiter:<span class=""> {{$courses[2]->lessons_waiter}}</span></li>
                        </ul>
                        <input type="hidden" name="courses_id" value="{{$courses[2]->id}}">
                        <button type="submit" class="btn btn-dark my-2">Choose for this pakket</button>
                    </div>
                </form>
            </div>

            <!-- de vierde card -->
            <div class="col-sm-3 col-md-3">
                <form action="courses/subscribe" method="post">
                    @csrf
                    <div class="card">
                        <img src="{{ asset('images/chef.png') }}" style="height: 200px" class="img-fluid" alt="...">
                        <div class="card-body">
                            <h3>{{$courses[3]->name}}</h3>                            <p class="card-text">{{$courses[3]->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <br>
                            <h5 class="text-center">Aantal avonden:</h5>
                            <li class="list-group-item">Lessons-Chef:<span class="text-success"> {{$courses[3]->lessons_chef}}</span></li>
                            <li class="list-group-item">Lessons-Bartender<span class="text-success"> {{$courses[3]->lessons_bartender}}</span></li>
                            <li class="list-group-item">Lessons-Waiter:<span class="text-success"> {{$courses[3]->lessons_waiter}}</span></li>
                        </ul>
                        <input type="hidden" name="courses_id" value="{{$courses[3]->id}}">
                        <button type="submit" class="btn btn-dark btn-success my-2">Choose for this package</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
