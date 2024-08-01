<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);

use \Bitrix\Main\Page\Asset;
use \Bitrix\Main\Config\Option;

?>

<?php
$address = Option::get("askaron.settings", "UF_ADDRESS");
$email = Option::get("askaron.settings", "UF_EMAIL");

$phone = Option::get("askaron.settings", "UF_PHONE");
$cleanPhone = str_replace(" ", "", $phone);

$telegram = Option::get("askaron.settings", "UF_TELEGRAM");
$whatsapp = Option::get("askaron.settings", "UF_WHATSAPP");
$instagram = Option::get("askaron.settings", "UF_INSTA");
$youtube = Option::get("askaron.settings", "UF_YOUTUBE");

$imageId = Option::get("askaron.settings", "UF_HERO_IMAGE");
$imageForHeroSection = CFile::GetPath($imageId);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $APPLICATION->ShowHead(); ?>

    <!--<meta charset="utf-8">-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Дизайн бюро интерьерных решений ПодТапочки</title>

    <meta content="Воплощение эксклюзивных интерьерных решений под тапочки, от идеи до полной реализации! Только высокое качество - другое Вам не подходит!"
          name="description">
    <meta content="дизайн, интерьер, ремонт, плитка, отделка, эксклюзивный, элитный, лакшери, под ключ, подтапочки, минимализм, авангард, неоклассика, экостиль, лофт, прованс, морской, сочи, дизайн проект, материалы, подбор, мебелировка"
          name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../favicon-16x16.png">
    <?php Asset::getInstance()->addString('<link rel="manifest" href="' . SITE_TEMPLATE_PATH . '/../../../site.webmanifest">') ?>
    <!--<link rel="manifest" href="/assets/site.webmanifest">-->
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <?php
    $cssFiles = [
        "/assets/vendor/aos/aos.css",
        "/assets/vendor/bootstrap/css/bootstrap.min.css",
        "/assets/vendor/bootstrap-icons/bootstrap-icons.css",
        "/assets/vendor/boxicons/css/boxicons.min.css",
        "/assets/vendor/glightbox/css/glightbox.min.css",
        "/assets/vendor/swiper/swiper-bundle.min.css",
        "/assets/vendor/slick/slick.css",
        "/assets/vendor/slick/slick-theme.css",
    ];

    foreach ($cssFiles as $file) {
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . $file);
    }
    ?>


    <!-- Template Main CSS File -->
    <!--<link href="assets/css/style.css" rel="stylesheet">-->

    <!-- =======================================================
    * Template Name: Day
    * Updated: Jan 29 2024 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<?php $APPLICATION->ShowPanel(); ?>


<style>
    #preloader:after {
        content: "Загружаем интерьеры...";
        position: fixed;
        top: calc(50% + 35px);
        left: calc(50% - 90px);
    }
</style>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-cenAter">
            <i class="bi bi-envelope-fill"></i><a href="mailto:info@pod-tapochki.ru" class="email"
                                                  title="Напишите на почту и мы отправим всю информацию"><?= $email ?></a>
            <i class="bi bi-phone-fill phone-icon"></i> <a href="tel:<?= $cleanPhone ?>>" class="phone"
                                                           title="Позвоните нам и мы проконсультируем по всем вопросам"><?= $phone ?></a>
            <i class="bi bi-geo-fill" style="margin-left: 15px;"></i> <a class="city scrollto"
                                                                         href="#contact"><?= $address ?></a>
        </div>
        <div class="social-links d-none d-md-block">
            <a href="<?= $telegram ?>" class="telegram" target="_blank"><i class="bi bi-telegram"></i></a>
            <a href="<?= $whatsapp ?>" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            <!--        <a href="https://www.instagram.com/podtapochki/" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>-->
            <!--        <a href="https://www.youtube.com/channel/UCSOrN0UT4qFGdSPkVIQXzmQ" class="youtube" target="_blank"><i class="bi bi-youtube"></i></i></a>-->
        </div>
    </div>
</section>

<style>
    @media screen and (max-width: 450px) {

        .contact-info .bi-geo-fill,
        .contact-info .city {
            display: none;
        }
    }

    @media screen and (max-width: 365px) {

        .contact-info .email,
        .contact-info .phone {
            font-size: 0;
        }

        .contact-info .email:before {
            font-size: 15px;
            content: "Почта";
        }

        .contact-info .phone:before {
            font-size: 15px;
            content: "Звонок";
        }
    }
</style>

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo" title="Это наш логотип, запомните его, здесь воплощение Вашего интерьера в реальность">
            <a href="/">
                <div class="logo_left-part">
                    <div>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-icon.svg" alt="logo house icon
                        podtapochki">
                    </div>
                </div>
                <div class="logo_right-part">
                    <div>ПодТапочки</div>
                    <div class="logo_post-name">Интерьерные решения</div>
                </div>
            </a>
        </h1>

        <style>
            .logo > a {
                display: flex;
                font-size: 35px;
                font-family: "Amatic SC Bold", serif;
            }

            .logo_left-part {
                margin-right: 6px;
            }

            .logo_left-part div {
                display: flex;
                width: 100%;
            }

            .logo_left-part div img {
                width: 60px;
            }

            .logo_post-name {
                font-size: 0.6em;
            }
        </style>


        <?php $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "my_templates_menu",
            array(
                "COMPONENT_TEMPLATE" => "my_templates_menu",
                "ROOT_MENU_TYPE" => "left",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(),
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "N",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "N"
            ),
            false
        ); ?>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<style>
    #hero {
        width: 100%;
        height: calc(100vh - 110px);
        background: url('<?= $imageForHeroSection ?>') top center;
        background-size: cover;
        position: relative;
    }
</style>

<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
        <?php $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "COMPONENT_TEMPLATE" => ".default",
                "PATH" => "/local/include/section_hero_inc.php"
            ),
            false
        );
        ?>
        <a href="#portfolio" class="btn-get-started mt-1 scrollto">Посмотреть</a>
        <a href="#contact" class="btn-get-started mt-1" data-bs-toggle="modal" data-bs-target="#callbackModal">Оставить
            заявку</a>

        <!--        <style>-->

        <!--        </style>-->
    </div>

</section><!-- End Hero -->