

<!-- Modal -->
<div class="modal fade" id="bookATable" tabindex="-1" aria-labelledby="bookaTable" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Book a Table</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <img src="./src/img/booktable.jpg" class="img-fluid image-book">

            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="bookType">
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
                                <select class="form-select" id="bookPerson">
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
                            <div class="form-floating">
                                <input type="date" min="01-01-2021" max="01-01-2023" class="form-control" id="bookDate" placeholder="04-10-2021">
                                <label for="bookDate">Date</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-floating">
                                <input type="time" min="10:00" max="20:00" class="form-control" id="bookDate" placeholder="14:15">
                                <label for="bookDate">Time</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
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
                            <div class="form-floating">
                                <textarea class="form-control booktext" placeholder="Leave a comment here" id="bookInformation" height></textarea>
                                <label for="bookInformation">Do you have important dietary requirements, allergies or other remarks?</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-dark btn-george">Book my table</button>
            </div>
        </div>
    </div>
</div>