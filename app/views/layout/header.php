<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?= isset($pageTitle) ? $pageTitle . ' - ' . APP_NAME : APP_NAME . ' - Empowering Communities, Transforming Lives' ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="<?= isset($pageKeywords) ? $pageKeywords : 'NGO, Charity, Durga Saptashati, Foundation, Women Empowerment, Education, Healthcare, Community Development' ?>"
        name="keywords">
    <meta
        content="<?= isset($pageDescription) ? $pageDescription : (isset($metaDescription) ? $metaDescription : 'Durga Saptashati Foundation is dedicated to empowering communities through education, healthcare, women empowerment, and sustainable development programs across India.') ?>"
        name="description">
    <meta name="author" content="Durga Saptashati Foundation">

    <!-- Favicon -->
    <link href="<?= asset('img/favicon.ico') ?>" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?= asset('lib/flaticon/font/flaticon.css') ?>" rel="stylesheet">
    <link href="<?= asset('lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= asset('css/style.css') ?>" rel="stylesheet">
    <link href="<?= asset('css/navbar-responsive.css') ?>" rel="stylesheet">
</head>

<body>
    <!-- Header Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="row">
            <div class="col-md-8">
                <div class="top-bar-left">
                    <div class="text">
                        <i class="fa fa-phone-alt"></i>
                        <p>+91 98765 43210</p>
                    </div>
                    <div class="text">
                        <i class="fa fa-envelope"></i>
                        <p>info@saptashati.org</p>
                    </div>
                    <div class="text">
                        <i class="fa fa-map-marker-alt"></i>
                        <p>Mumbai, Maharashtra, India</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-bar-right">
                    <div class="social">
                        <a href="https://twitter.com/saptashati" target="_blank" title="Follow us on Twitter"
                            data-toggle="tooltip" data-placement="bottom">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://facebook.com/saptashati" target="_blank" title="Like us on Facebook"
                            data-toggle="tooltip" data-placement="bottom">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://linkedin.com/company/saptashati" target="_blank" title="Connect on LinkedIn"
                            data-toggle="tooltip" data-placement="bottom">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://instagram.com/saptashati" target="_blank" title="Follow us on Instagram"
                            data-toggle="tooltip" data-placement="bottom">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://youtube.com/saptashati" target="_blank" title="Subscribe to our YouTube"
                            data-toggle="tooltip" data-placement="bottom">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="<?= url('donate.php') ?>" class="btn" title="Donate Now" data-toggle="tooltip"
                            data-placement="bottom">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top Bar End -->

    <!-- Nav Bar Start -->
    <nav class="navbar navbar-expand-lg navbar-modern">
        <div class="container-fluid px-3 px-md-4">
            <a href="<?= url('index.php') ?>" class="navbar-brand">
                <img src="<?= asset('images/logo-wide.webp') ?>" alt="Durga Saptashati Foundation">
            </a>

            <!-- Modern Hamburger Menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Mobile Menu Header -->
                <div class="mobile-menu-header d-lg-none">
                    <img src="<?= asset('images/logo-wide.webp') ?>" alt="Durga Saptashati Foundation"
                        class="mobile-menu-logo">
                </div>
                <!-- Mobile Close Button -->
                <button class="mobile-close d-lg-none" onclick="closeMobileMenu()">
                    <i class="fas fa-times"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?= url('index.php') ?>"
                            class="nav-link <?= getCurrentPage() === 'index' ? 'active' : '' ?>">
                            <i class="fas fa-home nav-icon"></i> Home
                        </a>
                    </li>

                    <!-- About Mega Dropdown -->
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= url('about.php') ?>" id="aboutDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-users nav-icon"></i> About Us
                        </a>
                        <div class="dropdown-menu mega-dropdown-menu about-mega" aria-labelledby="aboutDropdown">
                            <div class="mega-dropdown-content">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mega-image">
                                            <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=300&h=200&fit=crop"
                                                alt="About Durga Saptashati Foundation" class="img-fluid rounded">
                                            <div class="mega-image-overlay">
                                                <h6>Our Mission</h6>
                                                <p>Empowering communities since inception</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="dropdown-header">Organization</h6>
                                        <a class="dropdown-item" href="<?= url('about.php') ?>">
                                            <i class="fas fa-heart"></i> Our Story & History
                                        </a>
                                        <a class="dropdown-item" href="<?= url('about.php#mission') ?>">
                                            <i class="fas fa-eye"></i> Vision & Mission
                                        </a>
                                        <a class="dropdown-item" href="<?= url('team.php') ?>">
                                            <i class="fas fa-users"></i> Leadership Team
                                        </a>
                                        <a class="dropdown-item" href="<?= url('about.php#achievements') ?>">
                                            <i class="fas fa-award"></i> Our Achievements
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="dropdown-header">Transparency</h6>
                                        <a class="dropdown-item" href="<?= url('about.php#reports') ?>">
                                            <i class="fas fa-file-alt"></i> Annual Reports
                                        </a>
                                        <a class="dropdown-item" href="<?= url('about.php#financials') ?>">
                                            <i class="fas fa-chart-pie"></i> Financial Reports
                                        </a>
                                        <a class="dropdown-item" href="<?= url('about.php#certifications') ?>">
                                            <i class="fas fa-certificate"></i> Certifications
                                        </a>
                                        <a class="dropdown-item" href="<?= url('about.php#partners') ?>">
                                            <i class="fas fa-handshake"></i> Our Partners
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Programs & Services Mega Dropdown -->
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= url('service.php') ?>" id="programsDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-hands-helping nav-icon"></i> Our Programs
                        </a>
                        <div class="dropdown-menu mega-dropdown-menu programs-mega" aria-labelledby="programsDropdown">
                            <div class="mega-dropdown-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mega-image">
                                            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=250&h=180&fit=crop"
                                                alt="Education Programs" class="img-fluid rounded">
                                            <div class="mega-image-overlay">
                                                <h6>Education</h6>
                                            </div>
                                        </div>
                                        <h6 class="dropdown-header">Education</h6>
                                        <a class="dropdown-item" href="<?= url('service.php#education') ?>">
                                            <i class="fas fa-graduation-cap"></i> School Support
                                        </a>
                                        <a class="dropdown-item" href="<?= url('service.php#literacy') ?>">
                                            <i class="fas fa-book"></i> Adult Literacy
                                        </a>
                                        <a class="dropdown-item" href="<?= url('service.php#digital') ?>">
                                            <i class="fas fa-laptop"></i> Digital Learning
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mega-image">
                                            <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?w=250&h=180&fit=crop"
                                                alt="Healthcare Services" class="img-fluid rounded">
                                            <div class="mega-image-overlay">
                                                <h6>Healthcare</h6>
                                            </div>
                                        </div>
                                        <h6 class="dropdown-header">Healthcare</h6>
                                        <a class="dropdown-item" href="<?= url('service.php#medical') ?>">
                                            <i class="fas fa-heartbeat"></i> Medical Camps
                                        </a>
                                        <a class="dropdown-item" href="<?= url('service.php#maternal') ?>">
                                            <i class="fas fa-baby"></i> Maternal Care
                                        </a>
                                        <a class="dropdown-item" href="<?= url('service.php#vaccination') ?>">
                                            <i class="fas fa-user-md"></i> Health Awareness
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mega-image">
                                            <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?w=250&h=180&fit=crop"
                                                alt="Women Empowerment" class="img-fluid rounded">
                                            <div class="mega-image-overlay">
                                                <h6>Empowerment</h6>
                                            </div>
                                        </div>
                                        <h6 class="dropdown-header">Women Empowerment</h6>
                                        <a class="dropdown-item" href="<?= url('service.php#women') ?>">
                                            <i class="fas fa-venus"></i> Women's Rights
                                        </a>
                                        <a class="dropdown-item" href="<?= url('service.php#skills') ?>">
                                            <i class="fas fa-briefcase"></i> Skill Development
                                        </a>
                                        <a class="dropdown-item" href="<?= url('service.php#microfinance') ?>">
                                            <i class="fas fa-coins"></i> Self Help Groups
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mega-image">
                                            <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=250&h=180&fit=crop"
                                                alt="Community Development" class="img-fluid rounded">
                                            <div class="mega-image-overlay">
                                                <h6>Community</h6>
                                            </div>
                                        </div>
                                        <h6 class="dropdown-header">Community Development</h6>
                                        <a class="dropdown-item" href="<?= url('service.php#rural') ?>">
                                            <i class="fas fa-home"></i> Rural Development
                                        </a>
                                        <a class="dropdown-item" href="<?= url('service.php#environment') ?>">
                                            <i class="fas fa-tree"></i> Environment Care
                                        </a>
                                        <a class="dropdown-item" href="<?= url('service.php#disaster') ?>">
                                            <i class="fas fa-hands-helping"></i> Disaster Relief
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Causes & Impact -->
                    <li class="nav-item">
                        <a href="<?= url('causes.php') ?>"
                            class="nav-link <?= getCurrentPage() === 'causes' ? 'active' : '' ?>">
                            <i class="fas fa-heart nav-icon"></i> Our Causes
                        </a>
                    </li>

                    <!-- Events & Activities Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= url('event.php') ?>" id="activitiesDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-calendar-alt nav-icon"></i> Events & Activities
                        </a>
                        <div class="dropdown-menu" aria-labelledby="activitiesDropdown">
                            <h6 class="dropdown-header">Events & Activities</h6>
                            <a class="dropdown-item" href="<?= url('event.php') ?>">
                                <i class="fas fa-calendar-day"></i> Upcoming Events
                            </a>
                            <a class="dropdown-item" href="<?= url('event.php#past') ?>">
                                <i class="fas fa-history"></i> Past Events
                            </a>
                            <a class="dropdown-item" href="<?= url('event.php#gallery') ?>">
                                <i class="fas fa-images"></i> Photo Gallery
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= url('event.php#yoga') ?>">
                                <i class="fas fa-om"></i> International Yoga Day
                            </a>
                            <a class="dropdown-item" href="<?= url('event.php#womens') ?>">
                                <i class="fas fa-female"></i> Women's Day Celebration
                            </a>
                            <a class="dropdown-item" href="<?= url('event.php#cultural') ?>">
                                <i class="fas fa-theater-masks"></i> Cultural Programs
                            </a>
                        </div>
                    </li>

                    <!-- News & Media Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= url('blog.php') ?>" id="mediaDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-newspaper nav-icon"></i> News & Media
                        </a>
                        <div class="dropdown-menu" aria-labelledby="mediaDropdown">
                            <h6 class="dropdown-header">Latest Updates</h6>
                            <a class="dropdown-item" href="<?= url('blog.php') ?>">
                                <i class="fas fa-blog"></i> Latest News
                            </a>
                            <a class="dropdown-item" href="<?= url('single.php') ?>">
                                <i class="fas fa-newspaper"></i> Press Releases
                            </a>
                            <a class="dropdown-item" href="<?= url('blog.php#success') ?>">
                                <i class="fas fa-star"></i> Success Stories
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= url('blog.php#reports') ?>">
                                <i class="fas fa-chart-line"></i> Impact Reports
                            </a>
                            <a class="dropdown-item" href="<?= url('blog.php#newsletter') ?>">
                                <i class="fas fa-envelope-open"></i> Newsletter
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="<?= url('contact.php') ?>"
                            class="nav-link <?= getCurrentPage() === 'contact' ? 'active' : '' ?>">
                            <i class="fas fa-phone nav-icon"></i> Contact Us
                        </a>
                    </li>

                    <!-- Get Involved Mega Dropdown -->
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= url('volunteer.php') ?>" id="involvedDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-hand-holding-heart nav-icon"></i> Get Involved
                        </a>
                        <div class="dropdown-menu mega-dropdown-menu dropdown-menu-right involved-mega"
                            aria-labelledby="involvedDropdown">
                            <div class="mega-dropdown-content">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mega-image">
                                            <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=300&h=200&fit=crop"
                                                alt="Join Durga Saptashati Foundation" class="img-fluid rounded">
                                            <div class="mega-image-overlay">
                                                <h6>Join Our Mission</h6>
                                                <p>Together we can make a difference</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="dropdown-header">Join Our Community</h6>
                                        <a class="dropdown-item" href="<?= url('volunteer.php') ?>">
                                            <i class="fas fa-user-plus"></i>
                                            <div>
                                                <strong>Become a Volunteer</strong>
                                                <small>Join our volunteer network</small>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="<?= url('volunteer.php#membership') ?>">
                                            <i class="fas fa-id-card"></i>
                                            <div>
                                                <strong>Membership Program</strong>
                                                <small>Be part of our family</small>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="<?= url('team.php#careers') ?>">
                                            <i class="fas fa-briefcase"></i>
                                            <div>
                                                <strong>Career Opportunities</strong>
                                                <small>Work with purpose</small>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="dropdown-header">Support Our Cause</h6>
                                        <a class="dropdown-item" href="<?= url('donate.php') ?>">
                                            <i class="fas fa-donate"></i>
                                            <div>
                                                <strong>Make a Donation</strong>
                                                <small>Every contribution matters</small>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="<?= url('contact.php#partnership') ?>">
                                            <i class="fas fa-handshake"></i>
                                            <div>
                                                <strong>Corporate Partnership</strong>
                                                <small>Collaborate for impact</small>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="<?= url('contact.php#sponsor') ?>">
                                            <i class="fas fa-star"></i>
                                            <div>
                                                <strong>Sponsor Programs</strong>
                                                <small>Fund specific initiatives</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <!-- CTA Button -->
                <a href="<?= url('donate.php') ?>" class="btn rally-btn ml-3">
                    <span class="btn-text">Make a Difference</span>
                    <span class="btn-icon"><i class="fas fa-heart"></i></span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Nav Bar End -->