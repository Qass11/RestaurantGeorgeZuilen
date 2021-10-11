@extends('layouts.app')
@section('pagename', 'Our Careers')

@section('content')
    <div class="container border-bottom call-to-action">
        <div class="row">
            <div class="col-sm-12 col-md-12 text-center">
                <h1>Hi Georgeous! <i class="fal fa-grin-hearts fa-fw"></i></h1>
                <p class="width95">
                    Are you a smart, self-motivated talent who values the true meaning of giving our guests a memorable experience?
                    Then we want to work with you! GEORGE is an ever-evolving restaurant group, always looking for talented, energetic individuals to join our équipe.
                    We believe in working hard and being dedicated to the job, while also having fun while you’re at it. Sounds good?
                    Then fill out the form on this page to submit an open application with preference for a particular position.
                </p>
            </div>
        </div>

        <div class="call-to-action-menu-one career">
            <div class="text-place">
                <h2>Be part of the George-family!</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-5">
                <h3>This is what our family says..</h3>
                <div class="career-review">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid animi aspernatur deleniti doloremque explicabo illo inventore odit officia omnis praesentium, quas quasi, sequi. At distinctio eveniet incidunt maiores voluptatibus.
                    </p>
                    <p>
                        &mdash; John Doe &mdash;
                    </p>
                </div>

                <div class="career-review">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid animi aspernatur deleniti doloremque explicabo illo inventore odit officia omnis praesentium, quas quasi, sequi. At distinctio eveniet incidunt maiores voluptatibus.
                    </p>
                    <p>
                        &mdash; John Doe &mdash;
                    </p>
                </div>

                <div class="career-review">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid animi aspernatur deleniti doloremque explicabo illo inventore odit officia omnis praesentium, quas quasi, sequi. At distinctio eveniet incidunt maiores voluptatibus.
                    </p>
                    <p>
                        &mdash; John Doe &mdash;
                    </p>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 ms-auto">
                <h3>open application</h3>
                <p>
                    Please fill out the form below to submit an open application.
                </p>

                <form>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="bookFirstname" placeholder="firstname">
                                <label for="bookFirstname">Firstname</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="bookLastname" placeholder="lastname">
                                <label for="bookLastname">Lastname</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="bookMail" placeholder="email">
                                <label for="bookMail">E-mail adress</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="bookPhone" placeholder="phone">
                                <label for="bookPhone">Phone number</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="chooseFunction">
                                    <option selected disabled>Make a choice</option>
                                    <option value="bartender">Bartender</option>
                                    <option value="bartender">Bartender</option>
                                    <option value="bartender">Bartender</option>
                                </select>
                                <label for="bookPerson">What position would you like to apply for?</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control motivationtext" placeholder="Leave a comment here" id="bookInformation"></textarea>
                                <label for="bookInformation">Your motivation</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload your Curriculum vitae below</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-dark btn-apply" type="submit">Apply now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
