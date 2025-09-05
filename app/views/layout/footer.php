        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>New Delhi, India</p>
                            <p><i class="fa fa-phone-alt"></i>+91 98765 43210</p>
                            <p><i class="fa fa-envelope"></i>info@saptashati.org</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href="#"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="<?php echo url('about.php'); ?>">About Us</a>
                            <a href="<?php echo url('contact.php'); ?>">Contact Us</a>
                            <a href="<?php echo url('causes.php'); ?>">Our Causes</a>
                            <a href="<?php echo url('event.php'); ?>">Upcoming Events</a>
                            <a href="<?php echo url('blog.php'); ?>">Latest Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="#" data-toggle="modal" data-target="#termsModal">Terms of use</a>
                            <a href="#" data-toggle="modal" data-target="#privacyModal">Privacy policy</a>
                            <a href="<?php echo url('donate.php'); ?>">Donate Now</a>
                            <a href="<?php echo url('volunteer.php'); ?>">Volunteer</a>
                            <a href="<?php echo url('contact.php'); ?>">Help</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form id="newsletter-form" action="<?php echo url('newsletter.php'); ?>" method="POST">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                                <button type="submit" class="btn btn-custom">Subscribe</button>
                                <label>Stay updated with our latest news!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo url(); ?>"><?php echo APP_NAME; ?></a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed with <i class="fa fa-heart text-danger"></i> for Divine Service</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo asset('lib/easing/easing.min.js'); ?>"></script>
        <script src="<?php echo asset('lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
        <script src="<?php echo asset('lib/waypoints/waypoints.min.js'); ?>"></script>
        <script src="<?php echo asset('lib/counterup/counterup.min.js'); ?>"></script>
        <script src="<?php echo asset('lib/parallax/parallax.min.js'); ?>"></script>
        
        <!-- Template Javascript -->
        <script src="<?php echo asset('js/main.js'); ?>"></script>
        <script src="<?php echo asset('js/navbar-enhanced.js'); ?>"></script>
    </body>
</html>