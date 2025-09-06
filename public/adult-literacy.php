<?php
require_once '../app/config/config.php';

$pageTitle = "Adult Literacy";
$pageDescription = "Teaching reading and writing to adults through Durga Saptashati Foundation's adult literacy programs for community empowerment.";
$pageKeywords = "adult literacy, education, reading, writing, adult education, community empowerment, Durga Saptashati Foundation";

include '../app/views/layout/header.php';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Adult Literacy</h2>
            </div>
            <div class="col-12">
                <a href="<?= url('index.php') ?>">Home</a>
                <a href="<?= url('service.php') ?>">Programs</a>
                <a href="<?= url('adult-literacy.php') ?>">Adult Literacy</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Adult Literacy Section Start -->
<div class="coming-soon-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="coming-soon-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                    <div class="coming-soon-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h1 class="coming-soon-title">Adult Literacy</h1>
                    <h2 class="coming-soon-subtitle">Teaching Reading & Writing Coming Soon</h2>
                    <p class="coming-soon-text">
                        We're launching adult literacy programs to teach reading and writing to adults who missed 
                        early education opportunities. Our initiative includes basic literacy classes, life skills 
                        training, and empowerment through knowledge to help adults achieve independence.
                    </p>
                    <a href="<?php echo url('service.php'); ?>" class="coming-soon-btn">
                        <i class="fas fa-arrow-left"></i> Back to Programs
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Adult Literacy Section End -->

<?php include '../app/views/layout/footer.php'; ?>