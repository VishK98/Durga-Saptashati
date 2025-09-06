<?php
require_once '../app/config/config.php';

$pageTitle = "Our Investors";
$pageDescription = "Meet the investors and major donors who support Durga Saptashati Foundation's mission to serve humanity through their generous contributions.";
$pageKeywords = "investors, major donors, supporters, funding, contributors, Durga Saptashati Foundation";

include '../app/views/layout/header.php';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Our Investors</h2>
            </div>
            <div class="col-12">
                <a href="<?= url('index.php') ?>">Home</a>
                <a href="<?= url('about.php') ?>">About Us</a>
                <a href="<?= url('our-investors.php') ?>">Investors</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<style>
.coming-soon-section {
    padding: 60px 0;
    background: #ffffff;
}

.coming-soon-card {
    background: white;
    border-radius: 15px;
    padding: 40px 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border: 1px solid #f0f0f0;
    text-align: center;
    max-width: 500px;
    margin: 0 auto;
}

.coming-soon-icon {
    font-size: 60px;
    color: #f26522;
    margin-bottom: 20px;
}

.coming-soon-title {
    font-size: 28px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.coming-soon-subtitle {
    font-size: 18px;
    color: #666;
    margin-bottom: 20px;
}

.coming-soon-text {
    font-size: 15px;
    color: #777;
    line-height: 1.5;
    margin-bottom: 25px;
}

.coming-soon-btn {
    display: inline-block;
    padding: 10px 30px;
    background: #f26522;
    color: white;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s;
    box-shadow: 0 4px 10px rgba(242, 101, 34, 0.3);
}

.coming-soon-btn:hover {
    background: #d94d0f;
    transform: translateY(-1px);
    box-shadow: 0 6px 15px rgba(242, 101, 34, 0.4);
    color: white;
    text-decoration: none;
}

@media (max-width: 768px) {
    .coming-soon-title {
        font-size: 24px;
    }
    .coming-soon-subtitle {
        font-size: 16px;
    }
    .coming-soon-card {
        padding: 30px 25px;
    }
}
</style>

<!-- Investors Section Start -->
<div class="coming-soon-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="coming-soon-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                    <div class="coming-soon-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h1 class="coming-soon-title">Our Investors</h1>
                    <h2 class="coming-soon-subtitle">Major Donors & Supporters Coming Soon</h2>
                    <p class="coming-soon-text">
                        We're preparing to showcase our valued investors and major donors who have made 
                        significant contributions to our cause. Meet the generous supporters whose funding 
                        and investment enable us to expand our mission and create greater impact.
                    </p>
                    <a href="<?php echo url('about.php'); ?>" class="coming-soon-btn">
                        <i class="fas fa-arrow-left"></i> Back to About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Investors Section End -->

<?php include '../app/views/layout/footer.php'; ?>