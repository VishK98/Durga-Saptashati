<?php
require_once '../app/config/config.php';

$pageTitle = "Medical Camps";
$pageDescription = "Free health checkups and treatments through Durga Saptashati Foundation's medical camps for underserved communities.";
$pageKeywords = "medical camps, health checkups, free treatment, healthcare, medical services, Durga Saptashati Foundation";

include '../app/views/layout/header.php';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Medical Camps</h2>
            </div>
            <div class="col-12">
                <a href="<?= url('index.php') ?>">Home</a>
                <a href="<?= url('service.php') ?>">Programs</a>
                <a href="<?= url('medical-camps.php') ?>">Medical Camps</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Medical Camps Section Start -->
<div class="coming-soon-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="coming-soon-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                    <div class="coming-soon-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h1 class="coming-soon-title">Medical Camps</h1>
                    <h2 class="coming-soon-subtitle">Free Health Checkups & Treatments Coming Soon</h2>
                    <p class="coming-soon-text">
                        We're organizing comprehensive medical camps offering free health checkups, diagnostic tests, 
                        treatments, and medicines for underserved communities. Our mobile healthcare units will bring 
                        quality medical services directly to remote areas and urban slums.
                    </p>
                    <a href="<?php echo url('service.php'); ?>" class="coming-soon-btn">
                        <i class="fas fa-arrow-left"></i> Back to Programs
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Medical Camps Section End -->

<?php include '../app/views/layout/footer.php'; ?>