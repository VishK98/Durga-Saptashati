<?php
require_once '../app/config/config.php';

$pageTitle = "Leadership Team";
$pageDescription = "Meet the dedicated leadership team behind Durga Saptashati Foundation - the people who guide our mission and drive our charitable initiatives.";
$pageKeywords = "leadership team, management, founders, directors, Durga Saptashati Foundation";

include '../app/views/layout/header.php';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Leadership Team</h2>
            </div>
            <div class="col-12">
                <a href="<?= url('index.php') ?>">Home</a>
                <a href="<?= url('about.php') ?>">About Us</a>
                <a href="<?= url('leadership.php') ?>">Leadership</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Leadership Section Start -->
<div class="our-story-section">
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="welcome-header" data-aos="fade-down" data-aos-duration="1000">
            <h1>Our <span class="highlight-brand">Leadership Team</span></h1>
            <p class="welcome-subtitle">Meet the Visionaries Behind Our Mission</p>
            <div class="title-underline"></div>
        </div>

        <!-- Introduction Section -->
        <div class="story-content" data-aos="fade-up" data-aos-duration="1000">
            <div class="highlight-text">
                <i class="fas fa-crown"></i>
                <span>Guided by Excellence</span>
            </div>
            <p class="story-paragraph">
                Our leadership team comprises dedicated individuals who bring decades of experience in social work, 
                community development, and organizational management. Together, they guide Durga Saptashati Foundation 
                towards achieving our mission of empowering vulnerable communities across India.
            </p>
        </div>

        <!-- Leadership Cards -->
        <div class="story-content">
            <div class="story-cards">
                <div class="story-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                    <i class="fas fa-user-tie"></i>
                    <h3>Board of Directors</h3>
                    <p>Experienced professionals providing strategic guidance and governance to ensure our foundation operates with transparency and effectiveness.</p>
                </div>
                <div class="story-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                    <i class="fas fa-users-cog"></i>
                    <h3>Executive Team</h3>
                    <p>Dynamic leaders overseeing daily operations, program implementation, and community outreach initiatives across various regions.</p>
                </div>
                <div class="story-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <i class="fas fa-heart"></i>
                    <h3>Advisory Council</h3>
                    <p>Respected community members and subject matter experts who provide valuable insights and support for our charitable programs.</p>
                </div>
            </div>
        </div>

        <!-- Leadership Philosophy -->
        <div class="mission-section" data-aos="fade-up" data-aos-duration="1000">
            <div class="mission-content">
                <div class="mission-image" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=400&fit=crop" alt="Leadership Excellence">
                </div>
                <div class="mission-text">
                    <h2 class="mission-title">
                        <i class="fas fa-lightbulb"></i>
                        Leadership Philosophy
                    </h2>
                    <p class="story-paragraph">
                        Our leadership approach is rooted in servant leadership principles, where every decision is made with 
                        the welfare of our beneficiaries at heart. We believe in collaborative leadership that empowers our 
                        team members and volunteers to contribute their best towards our shared mission.
                    </p>
                    <p class="story-paragraph">
                        With a commitment to transparency, accountability, and continuous learning, our leaders ensure that 
                        Durga Saptashati Foundation remains true to its core values while adapting to the evolving needs 
                        of the communities we serve.
                    </p>
                </div>
            </div>
        </div>

        <!-- Leadership Qualities -->
        <div class="story-content" data-aos="fade-up" data-aos-duration="1000">
            <div class="highlight-text">
                <i class="fas fa-star"></i>
                <span>Leadership Excellence</span>
            </div>
            
            <div class="story-cards">
                <div class="story-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Integrity & Ethics</h3>
                    <p>Unwavering commitment to ethical practices and transparent governance in all our operations and decision-making processes.</p>
                </div>
                <div class="story-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                    <i class="fas fa-compass"></i>
                    <h3>Visionary Thinking</h3>
                    <p>Strategic vision that anticipates future challenges and opportunities while staying true to our foundational mission and values.</p>
                </div>
                <div class="story-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <i class="fas fa-hands-helping"></i>
                    <h3>Collaborative Approach</h3>
                    <p>Fostering teamwork and partnerships that amplify our impact and create sustainable solutions for community development.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mission-section" data-aos="fade-up" data-aos-duration="1000">
            <div class="mission-content">
                <div class="mission-text">
                    <h2 class="mission-title">
                        <i class="fas fa-handshake"></i>
                        Join Our Leadership Journey
                    </h2>
                    <p class="story-paragraph">
                        We believe that true leadership emerges from every level of our organization. Whether you're a 
                        volunteer, donor, or community partner, your contribution helps shape our collective leadership 
                        and drives positive change in society.
                    </p>
                    <p class="story-paragraph">
                        If you share our passion for social justice and community empowerment, we invite you to join us 
                        in various capacities. Together, we can build a more equitable and compassionate world for all.
                    </p>
                </div>
                <div class="mission-image" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=500&h=400&fit=crop" alt="Team Collaboration">
                </div>
            </div>
        </div>

        <!-- Leadership Impact -->
        <div class="story-content" data-aos="fade-up" data-aos-duration="1000">
            <div class="highlight-text">
                <i class="fas fa-trophy"></i>
                <span>Our Impact Through Leadership</span>
            </div>
            <p class="story-paragraph">
                Under the guidance of our dedicated leadership team, Durga Saptashati Foundation has successfully 
                expanded its reach to numerous communities, implemented innovative programs, and built lasting 
                partnerships that continue to transform lives. Our leaders' commitment to excellence ensures that 
                every initiative we undertake creates meaningful and sustainable change.
            </p>
        </div>
    </div>
</div>
<!-- Leadership Section End -->

<?php include '../app/views/layout/footer.php'; ?>