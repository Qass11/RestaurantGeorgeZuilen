{{--register modal--}}
<div class="modal fade" id="loginGeorge" tabindex="-1" aria-labelledby="loginGeorgeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginGeorgeLabel">Login at George</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row" id="register-foto">
                        <div class="col-sm-12 col-md-12 mb-3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="email">
                                <label for="bookMail">E-mail adress</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" placeholder="password">
                                <label for="bookMail">Wachtwoord</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-dark">Wachtwoord vergeten</button>
                    <button class="btn btn-dark" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>





{{--register modal--}}
<div class="modal fade" id="registerGeorge"  tabindex="-1" aria-labelledby="registerGeorgeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerGeorgeLabel">register at George</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email-register" placeholder="email">
                                <label for="email-register">E-mail adress</label>
                                <small class="m-1">choose a good email formating</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--activate modal--}}

<div class="modal fade" id="activateGeorge" tabindex="-1" aria-labelledby="activateGeorgeLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="activateGeorgeLabel">Activate at George</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 col-md-5">
                            <img src="{{ asset("images/activate-foto.jpg")}}" class="activate-foto">
                        </div>
                        <div class="col-sm-7 col-md-7">

                    <div class="row">
                        <div class="col-sm-4 col-md-4 mb-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="voornaam" placeholder="voornaam">
                                <label for="voornaam">Voornaam</label>
                            </div>

                        </div>
                        <div class="col-sm-4 col-md-4 mb-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="tussenvogesel" placeholder="tussenvogesel">
                                <label for="tussenvogesel">Tussenvogesel</label>
                            </div>

                        </div>
                        <div class="col-sm-4 col-md-4 mb-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="achternaam" placeholder="achternaam">
                                <label for="achternaam">Achternaam</label>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 mb-5">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="tel" placeholder="tel" min="0">
                                <label for="tel">Telefoonnummer</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="woonplaats" placeholder="woonplaats">
                                <label for="woonplaats">Woonplaats</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-4 mb-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="straat" placeholder="straat">
                                <label for="straat">Straat</label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 mb-5">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="huisnummer" placeholder="huisnummer">
                                <label for="huisnummer">Huisnummer</label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 mb-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="postcode" placeholder="postcode">
                                <label for="postcode">Postcode</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="pwd" placeholder="password">
                                <label for="pwd">Kies een nieuw wachtwoord</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="pwd-repeat" placeholder="password-repeat">
                                <label for="pwd-repeat">Kies een nieuw wachtwoord</label>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="submit">Activated</button>
                </div>
            </form>
        </div>
    </div>
</div>






