<?php require_once "control/settings/code/front.php";?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$Title?></title>
    <meta name="description" content="<?=$Desc?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/swipper.css">
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Font Family Comforter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- header_area_start -->
    <header class="transparent_header header_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-md-2 col-6">
                    <div class="header_logo">
                        <i class="fas fa-code"></i>
                        <span>Turana</span>
                        <i class="fas fa-code"></i>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-7 d-none d-lg-block">
                    <div class="main_menu">
                        <nav id="mobile-menu" class="mobile_menu">
                            <ul>
                                <li class="active"><a href="#">Əsas Səhifə</a></li>
                                <li><a href="#about">Haqqımda</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#contact">Əlaqə</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-10 col-6">
                    <div class="header_right">
                        <div class="humberger_sign open-mobile-menu">
                            <span class="bar1"></span>
                            <span class="bar2"></span>
                            <span class="bar3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header_area_start -->

    <!-- Sidebar for Mobile -->
    <div class="fix d-lg-none">
        <div class="side-info">
            <div class="offset-widget offset-logo mb-30 pb-20">
                <div class="row align-items-center">
                    <div class="col-8"><a href="index.html" class="mobile_logo">
                            <div class="header_logo">
                                <i class="fas fa-code"></i>
                                <span>Turana</span>
                                <i class="fas fa-code"></i>
                            </div>
                        </a></div>
                    <div class="col-4 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                    </div>
                </div>

            </div>

            <div class="mobile-menu fix"></div>

            <div class="contact-infos mt-50 mb-30">
                <div class="contact-list mobile_contact mb-30">
                    <h4>Əlaqə</h4>
                    <span class="sidebar-address"><i class="fal fa-map-marker-alt"></i><span>Q.Qarayev 81 -132, Bakı,
                            Azərbaycan</span> </span>

                    <a href="tel:0503948600"><i class="fal fa-phone"></i><span>0503948600</span></a>
                    <a href="mailto:turane.ismayilovaa@mail.ru" class="theme-3"><i
                            class="far fa-envelope"></i><span><span>turane.ismayilovaa@mail.ru</span></span></a>

                </div>

                <div class="top_social footer_social offset_social mt-20 mb-30">
                    <a href="<?=$Fb?>" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?=$İns?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/turana-ismayilova-51965818b/" target="_blank"
                        class="linkedin"><i class="fab fa-linkedin"></i></a>
                    <a href="<?=$Github?>" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Sidebar for Laptop -->
    <div class="fix d-none d-lg-block">

        <div class="offset-sidebar side-info">

            <div class="offset-widget offset-logo mb-30 pb-20">
                <div class="row align-items-center">
                    <div class="col-8"><a href="index.html">
                            <div class="header_logo">
                                <i class="fas fa-code"></i>
                                <span>Turana</span>
                                <i class="fas fa-code"></i>
                            </div>
                        </a></div>
                    <div class="col-4 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                    </div>
                </div>

            </div>


            <div class="contact-infos mt-30 mb-30">
                <div class="contact-list mb-30">
                    <h4>Əlaqə</h4>
                    <span class="sidebar-address"><i class="fal fa-map-marker-alt"></i><span>Q.Qarayev 81 -132, Bakı,
                            Azərbaycan</span> </span>

                    <a href="tel:0503948600"><i class="fal fa-phone"></i><span>0503948600</span></a>
                    <a href="mailto:turane.ismayilovaa@mail.ru" class="theme-3"><i
                            class="far fa-envelope"></i><span><span>turane.ismayilovaa@mail.ru</span></span></a>

                </div>

                <div class="top_social footer_social  offset_social mt-20 mb-30">
                    <a href="<?=$Fb?>" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?=$İns?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/turana-ismayilova-51965818b/" target="_blank"
                        class="linkedin"><i class="fab fa-linkedin"></i></a>
                    <a href="<?=$Github?>" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas-overlay"></div>
    <!-- slide-bar end -->


    <!-- main_area_start -->
    <main>
        <!-- slider_area-start -->
        <section class="slider_area fix">
            <div class="swiper-container2 slider_active">
                <div class="swiper-wrapper2">
                    <div class="swiper-slide2 slider_single slider_height">
                        <div class="shape_circle horizontal_move100px"><img src="assets/img/shape_circle.png"
                                alt="shape"></div>
                        <div class="shape_dots upward_movement200px d-none d-md-block"><img
                                src="assets/img/shape_dots.png" alt="shape"></div>
                        <div class="shape_leftmiddle">
                            <div class="width_visible d-inline-block"><img src="assets/img/shape_leftmiddle.png"
                                    alt="shape"></div>
                        </div>
                        <div class="shape_topright fix d-none d-lg-block">
                            <div class="shape_topright_inner top_right_visible"><img src="assets/img/shape_topright.png"
                                    alt="shape"></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider_single_relative slider_height slider_single_home">
                                        <div class="hero_woman">
                                            <div class="hero_woman_inner_wrap horizontal_move50px">
                                                <div class="hero_woman_inner fix circle-shape-change">
                                                    <img src="assets/img/feature_illustration.png" alt="hero_img">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="woman_illustration fix horizontal_move50px">
                                            <div class="woman_illustration_inner scale-img-animation-right"><img
                                                    src="assets/img/illustration_woman.png" alt="hero_png"></div>
                                        </div>

                                        <div class="slider_content p-rel pt-150p pt-md-0">
                                            <h2 class="slider_title">Turana <br>
                                                İsmayılova</h2>
                                            <p class="has_border_left"> Front-end Developer
                                            </p>
                                            <a href="#portfolio" class="slider_btn i_right">İşlərim<i
                                                    class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider_area-end -->

        <!-- feature_area-start -->
        <div class="feature_area pt-120 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section_title text-center mb-75">
                            <h2 class="title_text">İstifadə Etdiyim Texnologiyalar</h2>
                        </div>
                    </div>
                </div>

                <div class="feature_my_section mb-90">
                    <div class="feature_wrapper">
                        <div class="single_feature text-center mb-40">
                            <span class="feature_icon">
                                <i class="fab fa-html5"></i>

                            </span>
                            <h5 class="feature_title"><a href="feature-details.html">HTML</a></h5>
                        </div>
                        <div class="single_feature text-center mb-40">
                            <span class="feature_icon"><i class="fab fa-css3-alt"></i></span>
                            <h5 class="feature_title"><a href="feature-details.html">CSS</a></h5>
                        </div>
                        <div class="single_feature text-center mb-40">
                            <span class="feature_icon"><i class="fab fa-js-square"></i></span>
                            <h5 class="feature_title"><a href="feature-details.html">JAVASCRİPT</a></h5>
                        </div>
                        <div class="single_feature text-center mb-40">
                            <span class="feature_icon"><i class="fab fa-react"></i></span>
                            <h5 class="feature_title"><a href="feature-details.html">REACT</a></h5>
                        </div>
                        <div class="single_feature text-center mb-40">
                            <span class="feature_icon"><i class="fab fa-php"></i></span>
                            <h5 class="feature_title"><a href="feature-details.html">PHP</a></h5>
                        </div>
                        <div class="single_feature text-center mb-40">
                            <span class="feature_icon"><i class="fab fa-github"></i></span>
                            <h5 class="feature_title"><a href="feature-details.html">GİTHUB</a></h5>
                        </div>
                    </div>
                </div>

                <div id="about" class="person_feature_area">
                    <div class="row align-items-center">
                        <div class="col-xxl-7 col-lg-5">
                            <div class="person_image_wrapper p-rel mb-30">
                                <img  src="assets/img/me3.jpg" alt="img" class="rounded-circle feature_woman">
                                <div class="person_image_wrap">
                                    <div class="person_image_wrap_inner rotate_hr_image">
                                        <img src="assets/img/feature_illustration.png" alt="img"
                                            class="feature_illustration">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-lg-7">
                            <div class="person_feature_content pl-55 mb-30">
                                <div class="section_title mb-30">
                                    <h2 class="title_text"><?=$About_title?></h2>
                                </div>
                                <p><?=$About_desc?></p>
                                <ul class="feature_list mt-25">
                                    <li>Jugaad Rəqəmsal Marketing Agentliyi</li>
                                    <li>Coder Masters</li>
                                    <li>Onneks -İnformasiya Texnologiyaları Şirkəti</li>
                                </ul>
                                <div class="feature_button mt-50">
                                    <a href="Turana's CV.pdf" download class="feature_btn icon_right i_right">CV yüklə
                                        <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature_area-end -->

        <!-- portfolio_area-start -->
        <div id="portfolio" class="portfolio_area filter-wrapper p-rel pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section_title mb-70">
                            <h2 class="title_text">İşlərim</h2>
                        </div>
                    </div>
                </div>
                <div class="portfolio_wrapper p-rel">
                    <div class="p_shape_dots  upward_movement200px d-none d-md-block"><img
                            src="assets/img/shape_dots.png" alt="shape"></div>

                    <div class="portfolio_nav filter-nav mb-45">
                        <button class="active" data-filter="*">Hamısı</button>
                        <?php for($i=0;$i<count($CRUD->Select("portfolio_kat",1,"where status=1"));$i++){?>
                        <button data-filter=".<?= $PortKat[$i]["id"]?>"><?= $PortKat[$i]["name"]?></a></button>
                        <?php }?>
                        <div class="portfolio_items">
                            <div class="row filter-grid">
                                <?php for($i=0 ; $i<count($Portfolio);$i++) { ?>
                                <div
                                    class="col-xxl-4 col-xl-4 graphic branding col-lg-6 col-md-6 mb-100 grid-item <?= $Portfolio[$i]["KatId"]?>">
                                    <div class="portfolio_item">
                                        <div class="portfolio_item_inner">
                                            <a class="popup-image" href="<?=$Portfolio[$i]["sekil"]?>">
                                                <div class="item_img">
                                                    <img src="<?=$Portfolio[$i]["sekil"]?>" alt="img">
                                                    <i class="fal fa-plus"></i>
                                                </div>
                                            </a>
                                            <a href="<?=$Portfolio[$i]["link"]?>"
                                                class="item_text"><?= $Portfolio[$i]["ad"]?></a></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- portfolio_area-end -->

            <!-- skills_area-start -->
            <div class="skills_area pt-30">
                <div class="container">
                    <div class="skill_wrapper pb-100 border_bottom">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-6">
                                <div class="skill_info mb-30">
                                    <div class="section_title mb-30">
                                        <h2 class="title_text">Bilik &amp; Bacarıqlar </h2>
                                    </div>
                                    <p>
                                    <h5 class="title_text">SERTİFİKATLAR </h5>
                                    Coders Azerbaijan- Front end Developer (02/2021)<br>
                                    Yup Technology-Full Stack Developer (05/2020)<br>
                                    LİB Language Centre -English language (Upper - intermediate) (07/2019)<br>
                                    Upper Education -General English (intermadiate level ) (04/2019)<br>


                                    </p>
                                    <div class="skill_button mt-30">
                                        <a href="#contact" class="blog_btn i_right">Əlaqə saxla <i
                                                class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6">
                                <div class="skill_item_wrapper mb-30">
                                    <div class="skill_progress_single mb-50">
                                        <span>HTML</span>
                                        <span class="progress_value">95%</span>
                                        <div class="progress skill_progress">
                                            <div class="progress-bar wow slideInLeft theme-1" data-wow-duration="1s"
                                                data-wow-delay="0.5s" role="progressbar" data-width="95%"
                                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill_progress_single mb-50">
                                        <span>CSS</span>
                                        <span class="progress_value">90%</span>
                                        <div class="progress skill_progress">
                                            <div class="progress-bar wow slideInLeft theme-1" data-wow-duration="1s"
                                                data-wow-delay="0.6s" role="progressbar" data-width="90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill_progress_single mb-50">
                                        <span>Bootstrap</span>
                                        <span class="progress_value">85%</span>
                                        <div class="progress skill_progress">
                                            <div class="progress-bar wow slideInLeft theme-1" data-wow-duration="1s"
                                                data-wow-delay="0.7s" role="progressbar" data-width="85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill_progress_single mb-50">
                                        <span>Javascript</span>
                                        <span class="progress_value">80%</span>
                                        <div class="progress skill_progress">
                                            <div class="progress-bar wow slideInLeft theme-1" data-wow-duration="1s"
                                                data-wow-delay="0.8s" role="progressbar" data-width="80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill_progress_single mb-50">
                                        <span>React</span>
                                        <span class="progress_value">75%</span>
                                        <div class="progress skill_progress">
                                            <div class="progress-bar wow slideInLeft theme-1" data-wow-duration="1s"
                                                data-wow-delay="0.9s" role="progressbar" data-width="75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="skill_progress_single mb-50">
                                        <span>PHP</span>
                                        <span class="progress_value">60%</span>
                                        <div class="progress skill_progress">
                                            <div class="progress-bar wow slideInLeft theme-1" data-wow-duration="1s"
                                                data-wow-delay="1s" role="progressbar" data-width="60%"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- skills_area-end -->

            <!-- blog_area-start -->
            <div id="blog" class="blog_area pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="section_title mb-75">
                                <h2 class="title_text">Bloqlarım</h2>
                            </div>
                        </div>
                    </div>
                    <div class="blog_border pb-100">
                        <div class="row">
                            <?php for($i=0 ; $i<count($Blog);$i++) { ?>
                            <div class="col-xl-4 col-md-6">
                                <div class="single_blog mb-30">
                                    <div class="blog_img w_img">
                                        <a href="<?=$Blog[$i]["slug"] ?>">
                                            <img src="<?=$Blog[$i]["sekil"] ?>" alt="img">
                                        </a>
                                    </div>
                                    <div class="blog_content_wrapper_default">
                                        <div class="blog_content">
                                            <span class="blog_cat">Design</span>
                                            <h4 class="blog_title"><a href="<?=$Blog[$i]["slug"] ?>">
                                                    <?=$Blog[$i]["title"] ?> </a></h4>
                                            <div class="blog_meta">
                                                <a href="#" class="meta_date"><i
                                                        class="fal fa-calendar-alt"></i><?=$Blog[$i]["date"] ?></a>
                                            </div>
                                        </div>
                                        <div class="blog_button blog_button_has_pos_default">
                                            <a href="<?=$Blog[$i]["slug"] ?>" class="blog_btn is_hide i_right">Read More
                                                <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog_area-end -->

            <!-- contact_area-start -->
            <div id="contact" class="contact_area pt-120 pb-100" data-overlay="soft" data-opacity="9"
                data-background="assets/img/contact/contact_bg.jpg">
                <div class="contact_content_wrapper p-rel">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="section_title text-center mb-75 p-rel">
                                    <h2 class="title_text">Əlaqə üçün emailə müraciət edə vəya nömrə ilə <br>əlaqə
                                        saxlaya bilərsiniz </h2>

                                    <div class="c_shape_dots upward_movement200px d-none d-md-block"><img
                                            src="assets/img/shape_dots.png" alt="shape"></div>
                                </div>
                            </div>
                        </div>
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="contact_single name_input mb-30">
                                        <input type="text" placeholder="Adınız">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="contact_single email_input mb-30">
                                        <input type="email" placeholder="Email Adresi">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="contact_single message_input mb-30">
                                        <textarea name="message" id="message" cols="30" rows="1"
                                            placeholder="Mesaj"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="submit_button mb-30">
                                        <button class="submit_btn i_right w_100" type="submit">Göndər <i
                                                class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- contact_area-end -->
            <!-- testimonial area start -->

    </main>
    <!-- main_area_start -->


    <!-- footer_area-start -->
    <footer class="footer_area">
        <div class="footer_top_area pt-80 pb-50">
            <div class="container">
                <div class="row">
                  
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer_widget mb-30">
                            <div class="footer_logo mb-40">
                                <a href="index.html">
                                    <div class="header_logo">
                                        <i class="fas fa-code"></i>
                                        <span>Turana</span>
                                        <i class="fas fa-code"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="footer_widget_info">
                                <span class="footer_info_line">
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span class="footer_info_text">Q.Qarayev 81 -132, Bakı,
                                        Azərbaycan</span>
                                </span>
                                <span class="footer_info_line">
                                    <i class="fal fa-envelope-open-text"></i>
                                    <a class="footer_info_text"
                                        href="mailto:turane.ismayilovaa@mail.ru">turane.ismayilovaa@mail.ru</a>
                                </span>
                                <span class="footer_info_line">
                                    <i class="fal fa-phone"></i>
                                    <a class="footer_info_text" href="tel:0503948600">050 394 86 00</a>
                                </span>
                            </div>
                            <div class="footer_social mt-30">
                                <a href="<?=$Fb?>" target="_blank" class="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="<?=$İns?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/turana-ismayilova-51965818b/" target="_blank"
                                    class="linkedin"><i class="fab fa-linkedin"></i></a>
                                <a href="<?=$Github?>" target="_blank" class="youtube"><i
                                        class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer_widget mb-30 pl-20">
                            <div class="footer_widget_title mb-35">
                                <h4 class="footer_title_text pr-35">Blog</h4>
                            </div>
                            <div class="footer_widget_content">
                                <ul class="footer_links">
                                <?php for($i=0 ; $i<count($Blog);$i++) { ?>
                                    <li><a href="<?=$Blog[$i]["slug"] ?>"><?=$Blog[$i]["title"] ?> </a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer_widget mb-30">
                            <div class="footer_widget_title mb-35">
                                <h4 class="footer_title_text">Mesaj Yaz</h4>
                            </div>
                            <div class="footer_widget_content">
                                <p>Əməkdaşlıq üçün göstərilmiş email bölməsinə yaza bilərsiniz !</p>
                                <form action="#">
                                    <div class="footer_subscription">
                                        <input type="email" placeholder="Email">
                                        <button class="submit_btn i_right" type="submit">Göndər <i
                                                class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  

                </div>
            </div>
        </div>
        <div class="footer_copyright_area">
            <div class="container">
                <div class="copyright_border">
                    <div class="row align-items-center">
                        <div class="col-xxl-4 col-lg-4 text-center text-lg-start order-1 order-lg-0">
                            <p>&copy; <a href="index.html">Turana İsmail</a></p>
                        </div>
                        <div class="col-xxl-8 col-lg-8 text-center text-lg-end order-0 order-lg-1">
                            <nav>
                                <ul class="footer_menu">
                                    <li class="active"><a href="#">Ana Səhifə</a></li>
                                    <li><a href="#about">Mənim haqqımda</a></li>
                                    <li><a href="#contact">Əlaqə məlumatları</a></li>
                                    <li><a href="#portfolio">İşlərim</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_area-end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- JS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/swipper-bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/mouse-wheel.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/appair.min.js"></script>
    <script src="assets/js/back-to-top.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>