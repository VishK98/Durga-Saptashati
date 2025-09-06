<?php
require_once '../app/config/config.php';

$pageTitle = "School Support";
$pageDescription = "Support education through scholarships and school infrastructure development with Durga Saptashati Foundation's school support programs.";
$pageKeywords = "school support, scholarships, education, school infrastructure, students, Durga Saptashati Foundation";

include '../app/views/layout/header.php';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>School Support</h2>
            </div>
            <div class="col-12">
                <a href="<?= url('index.php') ?>">Home</a>
                <a href="<?= url('service.php') ?>">Programs</a>
                <a href="<?= url('school-support.php') ?>">School Support</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- School Support Section Start -->
<div class="coming-soon-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="coming-soon-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                    <div class="coming-soon-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h1 class="coming-soon-title">School Support</h1>
                    <h2 class="coming-soon-subtitle">Scholarships & Infrastructure Coming Soon</h2>
                    <p class="coming-soon-text">
                        We're developing comprehensive school support programs including scholarships for deserving students, 
                        infrastructure development initiatives, educational supplies distribution, and academic support systems. 
                        Help us provide quality education opportunities to underprivileged children.
                    </p>
                    <a href="<?php echo url('service.php'); ?>" class="coming-soon-btn">
                        <i class="fas fa-arrow-left"></i> Back to Programs
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- School Support Section End -->

<?php include '../app/views/layout/footer.php'; ?>