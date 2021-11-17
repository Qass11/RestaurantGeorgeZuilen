@extends('layouts.panel')
@section('pagename', 'Courses Overview')

@section('content')
    <div class="container mt-3 pb-5">
        <h1 class="text-corona text-center">Courses</h1>
        <div class="row">
            <!-- de eertste card -->
            <div class="col-sm-3 col-md-3">
                <a href="#">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/general.jpg') }}" style="height: 200px" class="img-fluid" alt="...">
                        <div class="card-body">
                            <h5>General</h5>
                            <p class="card-text">Course for General.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <br>
                            <h5 class="text-center">Aantal avonden:</h5>
                            <li class="list-group-item">lessons_chef:<span class="text-primary"> 5</span></li>
                            <li class="list-group-item">lessons_bartender:<span class="text-primary"> 5</span></li>
                            <li class="list-group-item">lessons_bartender:<span class="text-primary"> 5</span></li>
                        </ul>
                        <button type="button" class="btn btn-primary my-2">Choose for this pakket</button>
                    </div>
                </a>
            </div>

            <!-- de tweede card -->
            <div class="col-sm-3 col-md-3">
                <a href="#">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/bartender.jpg') }}" style="height: 200px" class="img-fluid" alt="...">
                        <div class="card-body">
                            <h5>Bartender</h5>
                            <p class="card-text">Course for Bartender.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <br>
                            <h5 class="text-center">Aantal avonden:</h5>
                            <li class="list-group-item">lessons_chef:<span class="text-danger"> 3</span></li>
                            <li class="list-group-item">lessons_bartender:<span class="text-danger"> 9</span></li>
                            <li class="list-group-item">lessons_bartender:<span class="text-danger"> 3</span></li>
                        </ul>
                        <button type="button" class="btn btn-danger my-2">Choose for this pakket</button>
                    </div>
                </a>
            </div>

            <!-- de derde card -->
            <div class="col-sm-3 col-md-3">
                <a href="">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/waiter.jpg') }}" class="img-fluid"  style="height: 200px" alt="...">
                        <div class="card-body">
                            <h5>Waiter</h5>
                            <p class="card-text">Course for Waiter.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <br>
                            <h5 class="text-center">Aantal avonden:</h5>
                            <li class="list-group-item">lessons_chef:<span class=""> 3</span></li>
                            <li class="list-group-item">lessons_bartender:<span class=""> 2</span></li>
                            <li class="list-group-item">lessons_bartender:<span class=""> 10</span></li>
                        </ul>
                        <button type="button" class="btn btn-dark my-2">Choose for this pakket</button>
                    </div>
                </a>
            </div>
            <!-- de vierde card -->
            <div class="col-sm-3 col-md-3">
                <a href="#">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/chef.png') }}" style="height: 200px" class="img-fluid" alt="...">
                        <div class="card-body">
                            <h5>Bartender</h5>
                            <p class="card-text">Course for Bartender.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <br>
                            <h5 class="text-center">Aantal avonden:</h5>
                            <li class="list-group-item">lessons_chef:<span class="text-success"> 10</span></li>
                            <li class="list-group-item">lessons_bartender:<span class="text-success"> 2</span></li>
                            <li class="list-group-item">lessons_bartender:<span class="text-success"> 3</span></li>
                        </ul>
                        <button type="button" class="btn btn-success my-2">Choose for this pakket</button>
                    </div>
                </a>
            </div>

        </div>
    </div>

{{--    @endforeach--}}

@endsection
