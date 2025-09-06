<?php
require_once '../app/config/config.php';

$pageTitle = "Digital Learning";
$pageDescription = "Computer education and online resources through Durga Saptashati Foundation's digital learning programs for modern skill development.";
$pageKeywords = "digital learning, computer education, online resources, technology, digital skills, Durga Saptashati Foundation";

include '../app/views/layout/header.php';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Digital Learning</h2>
            </div>
            <div class="col-12">
                <a href="<?= url('index.php') ?>">Home</a>
                <a href="<?= url('service.php') ?>">Programs</a>
                <a href="<?= url('digital-learning.php') ?>">Digital Learning</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Digital Learning Section Start -->
<div class="coming-soon-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="coming-soon-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                    <div class="coming-soon-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h1 class="coming-soon-title">Digital Learning</h1>
                    <h2 class="coming-soon-subtitle">Computer Education & Online Resources Coming Soon</h2>
                    <p class="coming-soon-text">
                        We're establishing digital learning centers with computer education programs, online resource 
                        access, and technology training. Bridge the digital divide by providing modern skills training, 
                        internet access, and digital literacy to underserved communities.
                    </p>
                    <a href="<?php echo url('service.php'); ?>" class="coming-soon-btn">
                        <i class="fas fa-arrow-left"></i> Back to Programs
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Digital Learning Section End -->

<?php include '../app/views/layout/footer.php'; ?>