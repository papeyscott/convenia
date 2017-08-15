<?php

include 'includes/header.php';

include 'includes/db.php';

include 'include/functions.php';


?>
<title>Contact | Stunning World Enterprise</title>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>business Info</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.ng/maps/place/2+Mojidi+Street,+Allen,+Ikeja/@6.6127792,3.2921202,15z/data=!4m5!3m4!1s0x103b922562878d5b:0x3086cea1b8ac4af!8m2!3d6.5991639!4d3.3472329?hl=en"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>08110648448</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">stunningworldent@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>No 2, Mojidi Street, off
                            <br>Toyin Street, Ikeja, Lagos.</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact our Agent
                        
                    </h2>
                    <hr>
                    <p>Get in touch with us for travel advisory, airline ticketing, hotel bookings, vacations etc. kindly drop us a message and we would get in touch with you as soon as possible.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name*</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address*</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number*</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message*</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->











<?php
include 'includes/footer.php';
?>