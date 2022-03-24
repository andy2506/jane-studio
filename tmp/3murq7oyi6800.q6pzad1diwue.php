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
                        <form method="post" id="contactForm" name="contactForm">
                            <div class="mb-4 row">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name *">
                            </div>
                            <div class="mb-4 row">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email *">
                            </div>
                            <div class="mb-4 row">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone *">
                            </div>
                            <div class="mb-4 form-check row">
                                <label class="form-check-label f-cl-w" for="flexCheckChecked">
                                    Confirm we can contact you
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="confirmation" name="confirmation">
                            </div>
                            <div class="mb-4 form-button row">
                                <button type="submit" class="btn btn-light" style="width: 100%;">Contact</button>
                            </div>
                        </form>
                        <div id="form-message-warning mt-4"></div> 
                        <div id="form-message-success">
                            Your message was sent, thank you!
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="map-section">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5677120278287!2d-0.08962869999999999!3d51.5027999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760359bdd7498b%3A0x9cccc5ce4ac09462!2sKings%20College%20London%2C%2018-20%20Newcomen%20St%2C%20London%20SE1%201UL%2C%20UK!5e0!3m2!1sen!2sza!4v1647994554621!5m2!1sen!2sza" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<?php echo $this->render('includes/footer.htm',NULL,get_defined_vars(),0); ?>