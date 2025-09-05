<?php
?>
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Contact Us</h2>
            </div>
            <div class="col-12"><a href="index.php?page=home">Home</a><a href="#">Contact</a></div>
        </div>
    </div>
</div>
<div class="contact">
    <div class="container-fluid">
        <div class="section-header text-center">
            <p>Get In Touch</p>
            <h2>Contact for any query</h2>
        </div>
        <div class="contact-img"><img src="<?php echo asset('img/contact.jpg'); ?>" alt="Image"></div>
        <div class="contact-form">
            <div id="success"></div>
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="control-group"><input type="text" class="form-control" id="name" placeholder="Your Name"
                        required="required" data-validation-required-message="Please enter your name" /></div>
                <div class="control-group"><input type="email" class="form-control" id="email" placeholder="Your Email"
                        required="required" data-validation-required-message="Please enter your email" /></div>
                <div class="control-group"><input type="text" class="form-control" id="subject" placeholder="Subject"
                        required="required" data-validation-required-message="Please enter a subject" /></div>
                <div class="control-group"><textarea class="form-control" id="message" placeholder="Message"
                        required="required" data-validation-required-message="Please enter your message"></textarea>
                </div>
                <div><button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button></div>
            </form>
        </div>
    </div>
</div>