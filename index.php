<!-- PHP -->
<?php
require('include/db.php');
$query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,seo";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>
<!-- PHP -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Title -->
    <title><?=$user_data['page_title']?></title>
    <meta content="<?=$user_data['description']?>" name="description">
    <meta content="<?=$user_data['keywords']?>" name="keywords">
    <!-- Title -->
    <link href="assets/img/<?=$user_data['siteicon']?>" rel="icon">
    <!-- Favicons -->
    <link href="assets/img/<?=$user_data['siteicon']?>" rel="icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- =======================================================
  * Template Name: Personal - v4.3.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body style="background: url(assets/img/<?=$user_data['background_img']?>); background-size: cover; background-attachment: fixed;">
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">
            <!-- Title -->
            <h1><a href="index.php"><?=$user_data['title']?></a></h1>
            <!-- Title -->
            <!-- Subtitle -->
            <h2><?=$user_data['subtitle']?></h2>
            <!-- Subtitle -->
            <!-- Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <!-- Home -->
                    <?php 
                    if($user_data['home_section']){
                    ?>
                    <li><a class="nav-link active" href="#header">Home</a></li>
                    <?php
                    }
                    ?>
                    <!-- Home -->
                    <!-- About -->
                    <?php 
                    if($user_data['about_section']){
                    ?>
                    <li><a class="nav-link" href="#about">About</a></li>
                    <?php
                    }
                    ?>
                    <!-- About -->
                    <!-- Resume -->
                    <?php 
                    if($user_data['resume_section']){
                    ?>
                    <li><a class="nav-link" href="#resume">Resume</a></li>
                    <?php
                    }
                    ?>
                    <!-- Resume -->
                    <!-- Services -->
                    <?php 
                    if($user_data['services_section']){
                    ?>
                    <li><a class="nav-link" href="#services">Services</a></li>
                    <?php
                    }
                    ?>
                    <!-- Services -->
                    <!-- Portfolio -->
                    <?php 
                    if($user_data['portfolio_section']){
                    ?>
                    <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <?php
                    }
                    ?>
                    <!-- Portfolio -->
                    <!-- Contact -->
                    <?php 
                    if($user_data['contact_section']){
                    ?>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                    <?php
                    }
                    ?>
                    <!-- Contact -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- Navbar -->
            <!-- Social -->
            <?php 
            if($user_data['showicons']){
                ?>
            <div class="social-links">
                <!-- Twitter -->
                <?php if($user_data['twitter']!=''){
                ?>
                <a href="https://twitter.com/<?=$user_data['twitter']?>" class="twitter"><i
                        class="bi bi-twitter"></i></a>
                <?php
                }
                ?>
                <!-- Twitter -->
                <!-- Facebook -->
                <?php if($user_data['facebook']!=''){
                ?>
                <a href="https://facebook.com/<?=$user_data['facebook']?>" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <?php
                }
                ?>
                <!-- Facebook -->
                <!-- Instagram -->
                <?php if($user_data['instagram']!=''){
                ?>
                <a href="https://instagram.com/<?=$user_data['instagram']?>" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <?php
                }
                ?>
                <!-- Instagram -->
                <!-- Skype -->
                <?php if($user_data['skype']!=''){
                ?>
                <a href="https://skype.com/<?=$user_data['skype']?>" class="skype"><i class="bi bi-skype"></i></a>
                <?php
                }
                ?>
                <!-- Skype -->
                <!-- Linkedin -->
                <?php if($user_data['linkedin']!=''){
                ?>
                <a href="https://linkedin.com/<?=$user_data['linkedin']?>" class="linkedin"><i
                        class="bi bi-linkedin"></i></a>
                <?php
                }
                ?>
                <!-- Linkedin -->
            </div>
            <?php
            }
            ?>
            <!-- Social -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <!-- ======= About Me ======= -->
        <div class="about-me container">
            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <!-- Profile Picture -->
                    <img src="assets/img/<?=$user_data['profile_pic']?>" class="img-fluid">
                    <!-- Profile Picture -->
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <!-- About Title -->
                    <h3><?=$user_data['about_title']?></h3>
                    <!-- About Title -->
                    <!-- About Subtitle -->
                    <p class="fst-italic"><?=$user_data['about_subtitle']?></p>
                    <!-- About Subtitle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Personal Info -->
                            <ul class="data">
                                <?php 
                                $query2 = "SELECT * FROM personal_info";
                                $run2 = mysqli_query($db,$query2);
                                while($personal_info = mysqli_fetch_array($run2)){
                                ?>
                                <li><i class="bi bi-chevron-right"></i>
                                    <strong><?=$personal_info['label']?>:</strong><?=$personal_info['value']?>
                                </li>
                                <?php
                                }
                            ?>
                            </ul>
                            <!-- Personal Info -->
                        </div>
                    </div>
                    <!-- Description -->
                    <p><?=$user_data['about_desc']?></p>
                    <!-- Description -->
                </div>
            </div>
        </div>
        <!-- End About Me -->
        <!-- ======= Skills  ======= -->
        <div class="skills container">
            <div class="section-title">
                <h2>Skills</h2>
            </div>
            <div class="row skills-content">
                <div class="col-lg-12">
                    <!-- Skills -->
                    <?php 
                    $query3 = "SELECT * FROM skills";
                    $run3 = mysqli_query($db,$query3);
                    while($skill = mysqli_fetch_array($run3)){
                    ?>
                    <div class="progress">
                        <span class="skill"><?=$skill['skill_name']?><i
                                class="val"><?=$skill['skill_level']?>%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?=$skill['skill_level']?>"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- End Skills -->
    </section>
    <!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">
            <div class="section-title">
                <h2>Resume</h2>
                <p>Check My Resume</p>
            </div>
            <div class="row">
                <!-- Education -->
                <div class="col-lg-6">
                    <h3 class="resume-title">Education</h3>
                    <?php 
                    $query4 = "SELECT * FROM resume";
                    $run4 = mysqli_query($db,$query4);
                    while($resume = mysqli_fetch_array($run4)){
                    if($resume['type']=='e'){
                    ?>
                    <div class="resume-item">
                        <h4><?=$resume['title']?></h4>
                        <h5><?=$resume['time']?></h5>
                        <p><em><?=$resume['org']?></em></p>
                        <p><?=$resume['about_exp']?></p>
                    </div>
                    <?php
                    }
                    }
                    ?>
                </div>
                <!-- Education -->
                <!-- Experience -->
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    <?php 
                    $query4 = "SELECT * FROM resume";
                    $run4 = mysqli_query($db,$query4);
                    while($resume = mysqli_fetch_array($run4)){
                        if($resume['type']=='p'){
                            ?>
                    <div class="resume-item">
                        <h4><?=$resume['title']?></h4>
                        <h5><?=$resume['time']?></h5>
                        <p><em><?=$resume['org']?></em></p>
                        <p><?=$resume['about_exp']?></p>
                    </div>
                    <?php 
                    }
                    }
                    ?>
                </div>
                <!-- Experience -->
            </div>
        </div>
    </section>
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
                <p>My Works</p>
            </div>
            <!-- Portfolio -->
            <div class="row portfolio-container">
                <?php 
                    $query5 = "SELECT * FROM portfolio";
                    $run5 = mysqli_query($db,$query5);
                    while($portfolio = mysqli_fetch_array($run5)){
                    ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-photography">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/<?=$portfolio['project_pic']?>" style="width: 300px; height:300px">
                        <div class="portfolio-info">
                            <h4><?=$portfolio['project_type']?></h4>
                            <p><?=$portfolio['project_name']?></p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/<?=$portfolio['project_pic']?>"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="<?=$portfolio['project_name']?>"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                    ?>
            </div>
            <!-- Portfolio -->
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>
            <div class="row mt-2">
                <!-- Address -->
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <?php 
                            $query6 = "SELECT * FROM contact";
                            $run6 = mysqli_query($db,$query6);
                            while($contact = mysqli_fetch_array($run6)){
                            ?>
                        <p><?=$contact['address']?></p>
                        <?php
                                }
                            ?>
                    </div>
                </div>
                <!-- Address -->
                <!-- Social Media -->
                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <!-- Twitter -->
                            <?php 
                            if($user_data['twitter']!=''){
                            ?>
                            <a href="https://twitter.com/<?=$user_data['twitter']?>" class="twitter"><i
                                    class="bi bi-twitter"></i></a>
                            <?php
                            }
                            ?>
                            <!-- Twitter -->
                            <!-- Facebook -->
                            <?php 
                            if($user_data['facebook']!=''){
                            ?>
                            <a href="https://facebook.com/<?=$user_data['facebook']?>" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                            <?php
                            }
                            ?>
                            <!-- Facebook -->
                            <!-- Instagram -->
                            <?php 
                            if($user_data['instagram']!=''){
                            ?>
                            <a href="https://instagram.com/<?=$user_data['instagram']?>" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <?php
                            }
                            ?>
                            <!-- Instagram -->
                            <!-- Skype -->
                            <?php 
                            if($user_data['skype']!=''){
                            ?>
                            <a href="https://instagram.com/<?=$user_data['skype']?>" class="skype"><i
                                    class="bi bi-skype"></i></a>
                            <?php
                            }
                            ?>
                            <!-- Skype -->
                            <!-- Linkedin -->
                            <?php 
                            if($user_data['linkedin']!=''){
                            ?>
                            <a href="https://linkedin.com/<?=$user_data['linkedin']?>" class="linkedin"><i
                                    class="bi bi-linkedin"></i></a>
                            <?php
                            }
                            ?>
                            <!-- Linkedin -->
                        </div>
                    </div>
                </div>
                <!-- Social Media -->
                <!-- Email -->
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <?php 
                            $query6 = "SELECT * FROM contact";
                            $run6 = mysqli_query($db,$query6);
                            while($contact = mysqli_fetch_array($run6)){
                            ?>
                        <p><?=$contact['email']?></p>
                        <?php
                                }
                            ?>
                    </div>
                </div>
                <!-- Email -->
                <!-- Number -->
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <?php 
                            $query6 = "SELECT * FROM contact";
                            $run6 = mysqli_query($db,$query6);
                            while($contact = mysqli_fetch_array($run6)){
                            ?>
                        <p><?=$contact['mobile']?></p>
                        <?php
                                }
                            ?>
                    </div>
                </div>
                <!-- Number -->
            </div>
            <!-- Form -->
            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
            <!-- Form -->
        </div>
    </section>
    <!-- End Contact Section -->
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
        Panel Admin <a href="admin/index.php">Chou Tzuyu</a>
    </div>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>