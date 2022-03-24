<?php echo $this->render('includes/header.htm',NULL,get_defined_vars(),0); ?>
<div class="about-container">
    <?php echo $this->render('includes/nav.htm',NULL,get_defined_vars(),0); ?>
    <div class="container">
        <div class="content-section">
            <div class="row">
                <h3 class="page-title">About Jane's Design Studio</h3>
            </div>
            <div class="row">
                <div class="col-4">
                        <div class="profile-section">
                            <div class="profile-photo">
                                <img src="images/jane-photo.jpg">
                            </div>
                        </div>
                        <h4 class="f-cl-w">JANE DOE</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
                <div class="col-4">
                    <p>adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi.<br/><br/> Ut aliquip ex ea commodo consequat. Duis aute 
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                </div>
                <div class="col-4">
                    <div class="about-form">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="inputName" placeholder="Name *">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email *">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="inputPhone" placeholder="Phone *">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="contactConfirmation">
                                <label class="form-check-label f-cl-w" for="flexCheckChecked">
                                    Confirm we can contact you
                                </label>
                            </div>
                            <div class="form-button">
                                <button type="button" class="btn btn-light" style="width: 100%;">Contact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="map-section">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<?php echo $this->render('includes/footer.htm',NULL,get_defined_vars(),0); ?>