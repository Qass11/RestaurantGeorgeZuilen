@extends('layouts.app')
@section('pagename', 'Reservation')

@section('content')

    <div class="container no-border call-to-action">
        <div class="call-to-action-menu-one">
            <div class="text-place">
                <h2>Book a table</h2>
            </div>
        </div>
    </div>

    <div class="container border-bottom">

        <form action="/reservation" method="POST">
            @csrf
            <div class="row">

                <div class="col-sm-12 col-md-12">
                    <h1>Reservation details</h1>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="type" name="type">
                            <option selected disabled>Make a choice</option>
                            <option value="1">Lunch</option>
                            <option value="2">Dinner</option>
                            <option value="3">Only Drink</option>
                        </select>
                        <label for="bookType">Type of reservation</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="persons" name="persons">
                            <option selected disabled>Make a choice</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <label for="bookPerson">How many persons?</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="date" min="01-01-2021" max="01-01-2023" class="form-control" id="date" name="date" placeholder="04-10-2021">
                        <label for="bookDate">Date</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="time" min="10:00" max="20:00" class="form-control" id="time" name="time" placeholder="14:15">
                        <label for="bookDate">Time</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 mt-2">
                    <h1>Personal details</h1>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname">
                        <label for="bookFirstname">Firstname</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
                        <label for="bookLastname">Lastname</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="email">
                        <label for="bookMail">E-mail adress</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="phone">
                        <label for="bookPhone">Phone number</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="form-floating mb-3">
                        <textarea class="form-control booktext" placeholder="Leave a comment here" id="comments" name="comments" height></textarea>
                        <label for="bookInformation">Do you have important dietary requirements, allergies or other remarks?</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12">
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="submit">Book now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
