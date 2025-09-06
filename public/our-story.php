<?php
require_once '../app/config/config.php';

$pageTitle = "Our Story & History";
$pageDescription = "Learn about the journey and founding principles of Durga Saptashati Foundation - how we began our mission to serve humanity through divine grace.";
$pageKeywords = "our story, history, founding principles, Durga Saptashati Foundation, journey, mission";

include '../app/views/layout/header.php';
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Our Story & History</h2>
            </div>
            <div class="col-12">
                <a href="<?= url('index.php') ?>">Home</a>
                <a href="<?= url('about.php') ?>">About Us</a>
                <a href="<?= url('our-story.php') ?>">Our Story</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<div class="our-story-section">
    <div class="container-fluid">
        <div class="welcome-header" data-aos="fade-down" data-aos-duration="1000">
            <h1>Welcome to <span class="highlight-brand">Durga Saptashati</span></h1>
            <p class="welcome-subtitle">Where Divine Grace Meets Humanity's Greatest Needs</p>
            <div class="title-underline"></div>
        </div>

        <div class="story-content">
            <div class="story-intro" data-aos="fade-up" data-aos-duration="1000">
                <div class="story-intro-text">
                    <div class="highlight-text">
                        <i class="fas fa-quote-left"></i>
                        <span>Empowering Lives, Transforming Communities</span>
                    </div>
                    <p class="story-paragraph">
                        Saptashati Foundation is a women's rights nonprofit organization which is a platform to empower
                        widows,
                        handicapped people, disabled people, senior citizens and women of the nation. With the goals of
                        providing
                        strength, confidence, better living, and respect, Saptashati Foundation brings in enlightenment
                        and a ray
                        of hope in the world of people who have gone through a lot of test things in their lives.
                    </p>
                    <p class="story-paragraph">
                        We are the voice of these people, and we are dedicated to bringing that positive change that can
                        bring
                        happiness in their lives. We closely work with rural and urban women and organizations on
                        various problems
                        to make their lives better.
                    </p>
                </div>
                <div class="story-intro-image" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?w=500&h=400&fit=crop"
                        alt="Women Empowerment">
                </div>
            </div>

            <div class="story-cards">
                <div class="story-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h3>Supporting the Vulnerable</h3>
                    <p>Providing strength and support to widows, disabled individuals, and senior citizens across the
                        nation.</p>
                </div>

                <div class="story-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                    <i class="fas fa-users"></i>
                    <h3>Community Partnership</h3>
                    <p>Working closely with rural and urban organizations to address various social challenges.</p>
                </div>
                <div class="story-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Education & Awareness</h3>
                    <p>Providing better education for the needy and raising awareness against social evils.</p>
                </div>
            </div>

            <div class="story-paragraph" data-aos="fade-up" data-aos-duration="1000">
                Saptashati Foundation also links to various civil-society organizations on the welfare of society by
                addressing
                and resolving many issues for women and senior citizens. From providing better education for the needy
                people to
                raising voice against dowry harassment, child marriage, female genital mutilation, our team of
                Saptashati Foundation
                becomes the voice of the strong women of India and let them live with independence and a sense of
                respect in whatever
                they are doing.
            </div>
        </div>

        <div class="mission-section" data-aos="fade-up" data-aos-duration="1000">
            <div class="mission-content">
                <div class="mission-image" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=500&h=400&fit=crop"
                        alt="Our Mission">
                </div>
                <div class="mission-text">
                    <h2 class="mission-title">
                        <i class="fas fa-dove"></i>
                        Building a Society of Peace
                    </h2>
                    <p class="story-paragraph">
                        Saptashati Foundation is developing a society of peace, both inside and outside the houses,
                        through
                        women's active and knowledgeable involvement in various activities. By supporting daily wage
                        earners,
                        providing appropriate care for individuals with disabilities in collaboration with other NGOs,
                        and
                        empowering women with a strong foundation of traditional values and respect, the Saptashati
                        Foundation
                        serves as a modern helping hand for those in need.
                    </p>
                    <p class="story-paragraph">
                        We support and strengthen NGOs working for the upliftment of women, helping women discover their
                        voices
                        and confidently share their stories—fostering positive change and contributing to the growth of
                        a more
                        empowered Indian society.
                    </p>
                </div>
            </div>
        </div>

        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="<?php echo asset('img/facts.jpg'); ?>" data-aos="fade"
            data-aos-duration="1000">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">50</h3>
                                <p>Communities Reached</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">300</h3>
                                <p>Active Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">10000</h3>
                                <p>Children Supported</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">250000</h3>
                                <p>Funds Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <div class="story-content" data-aos="fade-up" data-aos-duration="1000">
            <div class="highlight-text">
                <i class="fas fa-bullseye"></i>
                <span>Our Commitment to Change</span>
            </div>
            <p class="story-paragraph">
                Working towards the welfare of women, Saptashati Foundation is rapidly taking significant steps to
                provide
                quality help to the deprived & underprivileged, thereby ensuring a 360 degree turn in their lives. We
                are
                courageous in our goals, and we are dedicated to cultivating programs that can help them in earning and
                leading a better life.
            </p>
        </div>
    </div>
</div>

<?php include '../app/views/layout/footer.php'; ?>