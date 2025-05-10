<?php include('./includes/header-inner.php');?>

<!-- start wpo-page-title -->
<section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Contact Us</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="index-1.html">Home</a></li>
                        <li>Contact Us</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->


<!-- start wpo-contact-pg-section -->
<section class="wpo-contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-10 offset-lg-1">
                <div class="office-info">
                    <div class="row">
                        <!--<div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-placeholder"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Address</h2>
                                            <p>7 Green Lake Street Crawfordsville, IN 47933</p>
                                        </div>
                                    </div>
                                </div>-->
                        <div class="col col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-email"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Email Us</h2>
                                    <p><a href="mailto:guddu.riyaz5@gmail.com">guddu.riyaz5@gmail.com</a></p>

                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Call Now</h2>
                                    <p><a href="tel:+918851131481">+91 885 113 1481</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpo-contact-title">
                    <h2>Have Any Question?</h2>
                    <p>It is a long established fact that a reader will be distracted
                        content of a page when looking.</p>
                </div>
                <div class="wpo-contact-form-area">
                    <form method="post" action="send_form.php" id="contact-form-main">
                        <div>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*">
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*">
                        </div>
                        <div>
                            <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone">
                        </div>
                        <div>
                            <select name="service" class="form-control">
                                <option disabled="disabled" selected="">Services</option>
                                <option>Over Night Care</option>
                                <option>Pet Walking</option>
                                <option>Pet Grooming</option>
                            </select>
                        </div>
                        <div class="fullwidth">
                            <textarea class="form-control" name="note" id="note" placeholder="Message..."></textarea>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn">Get in Touch</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-contact-pg-section -->

<!--  start wpo-contact-map -->
<section class="wpo-contact-map-section">
    <h2 class="hidden">Contact map</h2>
    <div class="wpo-contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448194.82162352453!2d77.09323125!3d28.6440836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfdedcde20dfd%3A0x285e6a82827515b1!2sPersian%20cat.%20In!5e0!3m2!1sen!2sin!4v1746293540298!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- end wpo-contact-map -->
<!-- end of page-wrapper -->
<?php include('./includes/footer-inner.php');?>