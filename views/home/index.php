<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>About Us</title>
    <link href=<?= URL_ROOT . URL_SUBFOLDER . "/views/footer_interface/index.css" ?> rel="stylesheet">
    <link href=<?= URL_ROOT . URL_SUBFOLDER . "/assets/css/style.css" ?> rel="stylesheet">

</head>

<body>
    <?php include APP_ROOT . '/database/database.php'; ?>
    <?php include 'views/partial/nav.php'; ?>

    <section id="hero">
        <div class="hero-container">
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-background"><img src=<?= URL_ROOT . URL_SUBFOLDER . "/assets/images/slide/homepage1.jpg" ?> style="width:100%" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Manito Website</span></h2>
                            <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="carousel-background"><img src=<?= URL_ROOT . URL_SUBFOLDER . "/assets/images/slide/homepage2.jpg" ?> style="width:100%" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown mb-0">Our Mission</h2>
                            <p class="animate__animated animate__fadeInUp">To be number one</p>
                            <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="carousel-background"><img src=<?= URL_ROOT . URL_SUBFOLDER . "/assets/images/slide/homepage3.jpg" ?>style="width:100%" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown mb-0"></h2>
                            <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="font-italic">
                            <img src=<?= URL_ROOT . URL_SUBFOLDER . "/assets/images/logo/logo.jpg" ?> alt="Logo" width="150" height="100">
                        </p>
                        <h3>Welcome to <strong><span style="color: red;">Manito</span></strong></h3>
                        <h3><strong>The Worldwide Leader in Pizza Delivery</strong></h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <div class="skills-content">
                            <p><b>Rating: </b></p>
                            <div class="progress">
                                <span class="skill">5 star <i class="val">93%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">4 star <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">3 star <i class="val">30%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">2 star <i class="val">5%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">1 star <i class="val">0%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="team">
            <div class="container">
                <div class="section-title">
                    <h2>Our Team</h2>
                </div>
                <div class="row" style="padding-left: 228px;">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="member">
                            <img src='<?= URL_ROOT . URL_SUBFOLDER . "/assets/images/team/Ảnh Lệ.jpg" ?>' class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>HoThiLe</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="member">
                            <img src='<?= URL_ROOT . URL_SUBFOLDER . "/assets/images/team/Ảnh Duyên.jpg" ?>' class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Nguyen Thi My Duyen</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="member">
                            <img src='<?= URL_ROOT . URL_SUBFOLDER . "/assets/images/team/Ảnh Niên.jpg" ?>' class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>ToNgolNien</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'views/footer_interface/index.php'; ?>

</body>
</html>