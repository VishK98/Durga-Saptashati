<?php
require_once '../app/config/config.php';
$pageTitle = "International Yoga Day";
$pageDescription = "Join thousands in celebrating International Yoga Day with Durga Saptashati Foundation's yoga and wellness programs.";
$pageKeywords = "international yoga day, yoga celebration, wellness programs, yoga events, June 21st, Durga Saptashati Foundation";
include '../app/views/layout/header.php';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12"><h2>International Yoga Day</h2></div>
            <div class="col-12">
                <a href="<?= url('index.php') ?>">Home</a>
                <a href="<?= url('event.php') ?>">Events</a>
                <a href="<?= url('international-yoga-day.php') ?>">International Yoga Day</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="coming-soon-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="coming-soon-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                    <div class="coming-soon-icon">
                        <i class="fas fa-om"></i>
                    </div>
                    <h1 class="coming-soon-title">International Yoga Day</h1>
                    <h2 class="coming-soon-subtitle">June 21st - Join Thousands Coming Soon</h2>
                    <p class="coming-soon-text">
                        We're organizing International Yoga Day celebrations on June 21st where thousands join together 
                        for mass yoga sessions, wellness workshops, meditation programs, and holistic health awareness 
                        promoting physical and mental well-being through ancient yoga practices.
                    </p>
                    <a href="<?php echo url('event.php'); ?>" class="coming-soon-btn">
                        <i class="fas fa-arrow-left"></i> Back to Events
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../app/views/layout/footer.php'; ?>