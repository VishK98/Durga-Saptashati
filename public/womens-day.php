<?php
require_once '../app/config/config.php';
$pageTitle = "Women's Day";
$pageDescription = "March 8th empowerment events celebrating women through Durga Saptashati Foundation's women's day programs.";
$pageKeywords = "women's day, march 8th, empowerment events, women celebration, gender equality, Durga Saptashati Foundation";
include '../app/views/layout/header.php';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12"><h2>Women's Day</h2></div>
            <div class="col-12">
                <a href="<?= url('index.php') ?>">Home</a>
                <a href="<?= url('event.php') ?>">Events</a>
                <a href="<?= url('womens-day.php') ?>">Women's Day</a>
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
                        <i class="fas fa-female"></i>
                    </div>
                    <h1 class="coming-soon-title">Women's Day</h1>
                    <h2 class="coming-soon-subtitle">March 8th - Empowerment Events Coming Soon</h2>
                    <p class="coming-soon-text">
                        We're celebrating Women's Day on March 8th with empowerment events including women's rights 
                        awareness campaigns, skill development workshops, leadership seminars, health checkups, and 
                        recognition ceremonies honoring achievements of women in our community.
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