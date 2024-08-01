<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("ПодТапочки");

use \Bitrix\Main\Config\Option;

$fullAddress = Option::get("askaron.settings", "UF_FULLADDRESS");
$email = Option::get("askaron.settings", "UF_EMAIL");

$phone = Option::get("askaron.settings", "UF_PHONE");
$cleanPhone = str_replace(" ", "", $phone);

$imageId = Option::get("askaron.settings", "UF_CTA_IMAGE");
$imageForCtaSection = CFile::GetPath($imageId);
?>
    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container-fluid">

                <!--Включаемая область текста секции "Спектр услуг"-->
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH" => "/local/include/section_services_inc.php"
                    ),
                    false
                );
                ?>

                <div class="row">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "services_template",
                        array(
                            "IBLOCK_TYPE" => "content",
                            "IBLOCK_ID" => "7",
                            "NEWS_COUNT" => "20",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "PROPERTY_CODE" => array("ICON_CODE")
                            // передать все параметры
                        ),
                        false
                    );
                    ?>
                </div>
            </div>
        </section>

        <style>
            .services .icon-box {
                cursor: pointer;
                width: 100%;
            }

            .services .icon-box:hover h4 {
                color: white;
            }

            .services .icon-box:hover {
                color: inherit;
            }
        </style>
        <!-- End Services Section -->

        <!--<section>
            <div class="container-fluid why-us">
                <div class="row">
                    <div class="content text-center mt-4 mb-4" data-aos="fade-up">
                        <h2>Организуем и реализуем полный спектр услуг:</h2>
                    </div>
                </div>
                <div class="row">

                    <a class="col scrollto" data-aos="fade-up" href="#about">
                        <div class="box">
                            <span>01</span>
                            <h4>Дизайн проект</h4>
                            <p>Технический план, визуализация 3D</p>
                        </div>
                    </a>

                    <a class="col mt-4 mt-md-0 scrollto" data-aos="fade-up" data-aos-delay="150" href="#stage2">
                        <div class="box">
                            <span>02</span>
                            <h4>Подбор и комплектация</h4>
                            <p>Эксклюзивного качества и под заказ</p>
                        </div>
                    </a>

                    <a class="col mt-4 mt-md-0 scrollto" data-aos="fade-up" data-aos-delay="300" href="#stage3">
                        <div class="box">
                            <span>03</span>
                            <h4>Подбор мебели, техники и аксессуаров</h4>
                            <p>Из безупречных магазинов и наилучшего качества</p>
                        </div>
                    </a>

                    <a class="col mt-4 mt-md-0 scrollto" data-aos="fade-up" data-aos-delay="450" href="#stage4">
                        <div class="box">
                            <span>04</span>
                            <h4>Ремонтные работы с авторским надзором</h4>
                            <p>Контроль качества ремонтных работ</p>
                        </div>
                    </a>

                    <a class="col mt-4 mt-md-0 scrollto" data-aos="fade-up" data-aos-delay="600" href="#stage5">
                        <div class="box">
                            <span>05</span>
                            <h4>Завершающая меблировка</h4>
                            <p>И готовим тапочки для удобного осмотра</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
          -->
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container-fluid">

                <!--Включаемая область текста секции "Интерьер"-->
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH" => "/local/include/section_interior_inc.php"
                    ),
                    false
                );
                ?>


                <div class="row aos-init aos-animate" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-minimal" class="filter-active">Минимализм</li>
                            <li data-filter=".filter-avangard">Авангард</li>
                            <li data-filter=".filter-neo">Неоклассика</li>
                            <li data-filter=".filter-eco">Экостиль</li>
                            <li data-filter=".filter-loft">Лофт</li>
                            <li data-filter=".filter-provance">Прованс</li>
                            <li data-filter=".filter-sea">Морской</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="150"
                     style="position: relative; height: 1277.52px;">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "interior_template",
                        array(
                            "IBLOCK_TYPE" => "content",
                            "IBLOCK_ID" => "10",
                            "NEWS_COUNT" => "20",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "PROPERTY_CODE" => array("INTERIOR_FILTER", "DETAIL_PICTURE"),
                            // передать все параметры
                        ),
                        false
                    );
                    ?>
                    <!--<a href="https://pod-tapochki.ru/upload/iblock/dcb/0ps1hjq9jz5fsj5m5fi34cvfrhputiwl.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-avangard portfolio-lightbox"
                       data-gallery="portfolioGalleryavangard"
                       style="position: absolute; left: 0; top: 0; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/dcb/50_50_1/0ps1hjq9jz5fsj5m5fi34cvfrhputiwl.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/dcb/600_600_1/0ps1hjq9jz5fsj5m5fi34cvfrhputiwl.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/28a/6r13wuihzdb0y6446rtz7hn47d5oez9m.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-avangard portfolio-lightbox"
                       data-gallery="portfolioGalleryavangard"
                       style="position: absolute; left: 705.538px; top: 0; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/28a/50_50_1/6r13wuihzdb0y6446rtz7hn47d5oez9m.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/28a/600_600_1/6r13wuihzdb0y6446rtz7hn47d5oez9m.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/6a5/fiuppxjz88m0mal138deym2nppayrr4h.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-avangard portfolio-lightbox"
                       data-gallery="portfolioGalleryavangard"
                       style="position: absolute; left: 1411.08px; top: 0; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/6a5/50_50_1/fiuppxjz88m0mal138deym2nppayrr4h.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/6a5/600_600_1/fiuppxjz88m0mal138deym2nppayrr4h.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/70f/ua1wya0g7anobmv4pk8nlf0cpp8z57ju.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-avangard portfolio-lightbox"
                       data-gallery="portfolioGalleryavangard"
                       style="position: absolute; left: 0; top: 479.861px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/70f/50_50_1/ua1wya0g7anobmv4pk8nlf0cpp8z57ju.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/70f/600_600_1/ua1wya0g7anobmv4pk8nlf0cpp8z57ju.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/f8e/1jz0mrff8rngv2lvj0x46gsjwz78h2yk.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-avangard portfolio-lightbox"
                       data-gallery="portfolioGalleryavangard"
                       style="position: absolute; left: 705.538px; top: 493.351px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/f8e/50_50_1/1jz0mrff8rngv2lvj0x46gsjwz78h2yk.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/f8e/600_600_1/1jz0mrff8rngv2lvj0x46gsjwz78h2yk.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/558/bqsqlipmk3r1gv1m1qq9p7snz3s33u2e.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-avangard portfolio-lightbox"
                       data-gallery="portfolioGalleryavangard"
                       style="position: absolute; left: 1411.08px; top: 493.351px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/558/50_50_1/bqsqlipmk3r1gv1m1qq9p7snz3s33u2e.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/558/600_600_1/bqsqlipmk3r1gv1m1qq9p7snz3s33u2e.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/23a/ldenh9d8843kgqndgcit33gvp7gd6hqc.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-minimal portfolio-lightbox"
                       data-gallery="portfolioGalleryminimal" style="position: absolute; left: 0; top: 0;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/23a/600_600_1/ldenh9d8843kgqndgcit33gvp7gd6hqc.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/23a/600_600_1/ldenh9d8843kgqndgcit33gvp7gd6hqc.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/ef1/uggac64b6r806i9tki7fkjv56s26pime.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-minimal portfolio-lightbox"
                       data-gallery="portfolioGalleryminimal" style="position: absolute; left: 612.587px; top: 0;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/ef1/600_600_1/uggac64b6r806i9tki7fkjv56s26pime.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/ef1/600_600_1/uggac64b6r806i9tki7fkjv56s26pime.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/77e/bd9mjw2xaf9c9js2nfmo9yg67lizf5xk.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-minimal portfolio-lightbox"
                       data-gallery="portfolioGalleryminimal" style="position: absolute; left: 1225.17px; top: 0;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/77e/600_600_1/bd9mjw2xaf9c9js2nfmo9yg67lizf5xk.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/77e/600_600_1/bd9mjw2xaf9c9js2nfmo9yg67lizf5xk.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/d2d/0s5n7jv2p57ptm2k8717xrdg6wqy38oa.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-minimal portfolio-lightbox"
                       data-gallery="portfolioGalleryminimal" style="position: absolute; left: 0; top: 420.434px;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/d2d/600_600_1/0s5n7jv2p57ptm2k8717xrdg6wqy38oa.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/d2d/600_600_1/0s5n7jv2p57ptm2k8717xrdg6wqy38oa.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/61c/3x6l1x96uyrnjloggiwky5qxkfupfz9e.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-minimal portfolio-lightbox"
                       data-gallery="portfolioGalleryminimal"
                       style="position: absolute; left: 1225.17px; top: 422.396px;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/61c/600_600_1/3x6l1x96uyrnjloggiwky5qxkfupfz9e.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/61c/600_600_1/3x6l1x96uyrnjloggiwky5qxkfupfz9e.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/e02/8j7prg9x30yjxsdwfwpn1w8vr8pxziiw.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-minimal portfolio-lightbox"
                       data-gallery="portfolioGalleryminimal"
                       style="position: absolute; left: 612.587px; top: 723.819px;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/e02/600_600_1/8j7prg9x30yjxsdwfwpn1w8vr8pxziiw.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/e02/600_600_1/8j7prg9x30yjxsdwfwpn1w8vr8pxziiw.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/205/jy3iyswcmzora4p2cf2zh1p6qwu7j9bn.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-minimal portfolio-lightbox"
                       data-gallery="portfolioGalleryminimal" style="position: absolute; left: 0; top: 851.649px;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/205/600_600_1/jy3iyswcmzora4p2cf2zh1p6qwu7j9bn.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/205/600_600_1/jy3iyswcmzora4p2cf2zh1p6qwu7j9bn.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/7f2/2hlwnm6e9codxiz7zdeua7fx3b5h3ie1.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-neo portfolio-lightbox"
                       data-gallery="portfolioGalleryneo"
                       style="position: absolute; left: 1411.08px; top: 2294.5px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/7f2/50_50_1/2hlwnm6e9codxiz7zdeua7fx3b5h3ie1.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/7f2/600_600_1/2hlwnm6e9codxiz7zdeua7fx3b5h3ie1.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/831/em7ldnxt7u541w2d452uh062y68fozpm.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-neo portfolio-lightbox"
                       data-gallery="portfolioGalleryneo"
                       style="position: absolute; left: 705.538px; top: 2426.28px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/831/50_50_1/em7ldnxt7u541w2d452uh062y68fozpm.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/831/600_600_1/em7ldnxt7u541w2d452uh062y68fozpm.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/777/d0petssxgdn8ny31tyv6m8vmek5xzfn6.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-neo portfolio-lightbox"
                       data-gallery="portfolioGalleryneo"
                       style="position: absolute; left: 0; top: 2443.19px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/777/50_50_1/d0petssxgdn8ny31tyv6m8vmek5xzfn6.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/777/600_600_1/d0petssxgdn8ny31tyv6m8vmek5xzfn6.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/9a0/8izj111wfl842ln8r11a0g9gfx17myls.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-neo portfolio-lightbox"
                       data-gallery="portfolioGalleryneo"
                       style="position: absolute; left: 1411.08px; top: 2774.36px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/9a0/50_50_1/8izj111wfl842ln8r11a0g9gfx17myls.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/9a0/600_600_1/8izj111wfl842ln8r11a0g9gfx17myls.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/e53/4kdaq6wkdun7g34cobcve9l9vfpul44v.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-neo portfolio-lightbox"
                       data-gallery="portfolioGalleryneo"
                       style="position: absolute; left: 0; top: 2882.12px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/e53/50_50_1/4kdaq6wkdun7g34cobcve9l9vfpul44v.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/e53/600_600_1/4kdaq6wkdun7g34cobcve9l9vfpul44v.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/7d4/5bsqcdq1sw2r05u2m091fir3z6zginxc.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-neo portfolio-lightbox"
                       data-gallery="portfolioGalleryneo"
                       style="position: absolute; left: 705.538px; top: 2906.15px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/7d4/50_50_1/5bsqcdq1sw2r05u2m091fir3z6zginxc.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/7d4/600_600_1/5bsqcdq1sw2r05u2m091fir3z6zginxc.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/520/wqbuw6m203ge7qtu3y9s0u5jridhs133.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-eco portfolio-lightbox"
                       data-gallery="portfolioGalleryeco"
                       style="position: absolute; left: 705.538px; top: 3454.17px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/520/50_50_1/wqbuw6m203ge7qtu3y9s0u5jridhs133.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/520/600_600_1/wqbuw6m203ge7qtu3y9s0u5jridhs133.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/05e/xv95p76kgius94970e0xtgsm0agpehqk.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-eco portfolio-lightbox"
                       data-gallery="portfolioGalleryeco"
                       style="position: absolute; left: 1411.08px; top: 3615.78px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/05e/50_50_1/xv95p76kgius94970e0xtgsm0agpehqk.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/05e/600_600_1/xv95p76kgius94970e0xtgsm0agpehqk.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/783/rdh9g2ndzt3o0k80ztx1lkccvfuc19fl.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-eco portfolio-lightbox"
                       data-gallery="portfolioGalleryeco"
                       style="position: absolute; left: 705.538px; top: 3906.81px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/783/50_50_1/rdh9g2ndzt3o0k80ztx1lkccvfuc19fl.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/783/600_600_1/rdh9g2ndzt3o0k80ztx1lkccvfuc19fl.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/616/61jwj5co99hf3jcu4n5vbi7u2y4a8gkz.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-eco portfolio-lightbox"
                       data-gallery="portfolioGalleryeco"
                       style="position: absolute; left: 0; top: 3944.65px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/616/50_50_1/61jwj5co99hf3jcu4n5vbi7u2y4a8gkz.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/616/600_600_1/61jwj5co99hf3jcu4n5vbi7u2y4a8gkz.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/892/tfnnme0va4pr2bbr1el4tox6hqdqd89o.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-eco portfolio-lightbox"
                       data-gallery="portfolioGalleryeco"
                       style="position: absolute; left: 1411.08px; top: 4109.13px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/892/50_50_1/tfnnme0va4pr2bbr1el4tox6hqdqd89o.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/892/600_600_1/tfnnme0va4pr2bbr1el4tox6hqdqd89o.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/c48/x4ysgmswhyvdtpezw4h5yo6iaoca8qim.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-eco portfolio-lightbox"
                       data-gallery="portfolioGalleryeco"
                       style="position: absolute; left: 705.538px; top: 4318.51px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/c48/50_50_1/x4ysgmswhyvdtpezw4h5yo6iaoca8qim.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/c48/600_600_1/x4ysgmswhyvdtpezw4h5yo6iaoca8qim.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/c66/365dqebdwq6edvy1g1q2ojwu2qe2p6ku.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-loft portfolio-lightbox"
                       data-gallery="portfolioGalleryloft"
                       style="position: absolute; left: 0; top: 4424.51px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/c66/50_50_1/365dqebdwq6edvy1g1q2ojwu2qe2p6ku.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/c66/600_600_1/365dqebdwq6edvy1g1q2ojwu2qe2p6ku.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/7f6/a1zc0rj879ehieprrs9ivvj43wuhpa7e.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-loft portfolio-lightbox"
                       data-gallery="portfolioGalleryloft"
                       style="position: absolute; left: 1411.08px; top: 4616.2px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/7f6/50_50_1/a1zc0rj879ehieprrs9ivvj43wuhpa7e.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/7f6/600_600_1/a1zc0rj879ehieprrs9ivvj43wuhpa7e.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/be3/e7inwnq2l5n643rc40ad708ke48pl1ft.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-loft portfolio-lightbox"
                       data-gallery="portfolioGalleryloft"
                       style="position: absolute; left: 705.538px; top: 4798.37px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/be3/50_50_1/e7inwnq2l5n643rc40ad708ke48pl1ft.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/be3/600_600_1/e7inwnq2l5n643rc40ad708ke48pl1ft.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/fcb/52y1dg7yy1e0f2a9hlabgpjca25xwjxe.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-loft portfolio-lightbox"
                       data-gallery="portfolioGalleryloft"
                       style="position: absolute; left: 0; top: 4917.86px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/fcb/50_50_1/52y1dg7yy1e0f2a9hlabgpjca25xwjxe.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/fcb/600_600_1/52y1dg7yy1e0f2a9hlabgpjca25xwjxe.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/d75/wjnwwdq3gyicl9tcd9ahes60cs26v3n9.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-loft portfolio-lightbox"
                       data-gallery="portfolioGalleryloft"
                       style="position: absolute; left: 1411.08px; top: 5096.06px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/d75/50_50_1/wjnwwdq3gyicl9tcd9ahes60cs26v3n9.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/d75/600_600_1/wjnwwdq3gyicl9tcd9ahes60cs26v3n9.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/841/ifv2oat7z56qojhsn64kh1zqwgp2v36o.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-loft portfolio-lightbox"
                       data-gallery="portfolioGalleryloft"
                       style="position: absolute; left: 705.538px; top: 5210.07px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/841/50_50_1/ifv2oat7z56qojhsn64kh1zqwgp2v36o.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/841/600_600_1/ifv2oat7z56qojhsn64kh1zqwgp2v36o.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/c5f/agm60m1rq1b6mvcontmomn5zdg40077g.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-provance portfolio-lightbox"
                       data-gallery="portfolioGalleryprovance"
                       style="position: absolute; left: 0; top: 5397.72px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/c5f/50_50_1/agm60m1rq1b6mvcontmomn5zdg40077g.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/c5f/600_600_1/agm60m1rq1b6mvcontmomn5zdg40077g.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/a77/irvjk0wc3p5xo9f8zgrw5qfn38j3h1sq.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-provance portfolio-lightbox"
                       data-gallery="portfolioGalleryprovance"
                       style="position: absolute; left: 1411.08px; top: 5575.92px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/a77/50_50_1/irvjk0wc3p5xo9f8zgrw5qfn38j3h1sq.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/a77/600_600_1/irvjk0wc3p5xo9f8zgrw5qfn38j3h1sq.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/46c/rmipsbf2cldbrh7k3kabk1f3pit40qau.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-provance portfolio-lightbox"
                       data-gallery="portfolioGalleryprovance"
                       style="position: absolute; left: 705.538px; top: 5717.13px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/46c/50_50_1/rmipsbf2cldbrh7k3kabk1f3pit40qau.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/46c/600_600_1/rmipsbf2cldbrh7k3kabk1f3pit40qau.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/35f/gngi7dvjz1gtvrdz5aoizgaqktcveif3.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-provance portfolio-lightbox"
                       data-gallery="portfolioGalleryprovance"
                       style="position: absolute; left: 0; top: 5877.58px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/35f/50_50_1/gngi7dvjz1gtvrdz5aoizgaqktcveif3.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/35f/600_600_1/gngi7dvjz1gtvrdz5aoizgaqktcveif3.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/e89/0238ylbd0xt8mbno8n4wdjpjrfxyhrk1.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-provance portfolio-lightbox"
                       data-gallery="portfolioGalleryprovance"
                       style="position: absolute; left: 1411.08px; top: 6123.94px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/e89/50_50_1/0238ylbd0xt8mbno8n4wdjpjrfxyhrk1.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/e89/600_600_1/0238ylbd0xt8mbno8n4wdjpjrfxyhrk1.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/723/ek7zuippgv559jmoib8x9ke9cntu8829.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-provance portfolio-lightbox"
                       data-gallery="portfolioGalleryprovance"
                       style="position: absolute; left: 705.538px; top: 6169.77px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/723/50_50_1/ek7zuippgv559jmoib8x9ke9cntu8829.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/723/600_600_1/ek7zuippgv559jmoib8x9ke9cntu8829.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/626/bq1spw7mvnpyje24suup6xq8m8nhsm60.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-sea portfolio-lightbox"
                       data-gallery="portfolioGallerysea"
                       style="position: absolute; left: 0; top: 6384.65px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/626/50_50_1/bq1spw7mvnpyje24suup6xq8m8nhsm60.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/626/600_600_1/bq1spw7mvnpyje24suup6xq8m8nhsm60.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/339/4n1sj023l0c4bt2pb0xx712f70id7lrr.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-sea portfolio-lightbox"
                       data-gallery="portfolioGallerysea"
                       style="position: absolute; left: 1411.08px; top: 6644.74px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/339/50_50_1/4n1sj023l0c4bt2pb0xx712f70id7lrr.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/339/600_600_1/4n1sj023l0c4bt2pb0xx712f70id7lrr.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/621/mv4h7cd3e9nut5pfclpz2g8b2ay93zq6.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-sea portfolio-lightbox"
                       data-gallery="portfolioGallerysea"
                       style="position: absolute; left: 705.538px; top: 6717.79px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/621/50_50_1/mv4h7cd3e9nut5pfclpz2g8b2ay93zq6.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/621/600_600_1/mv4h7cd3e9nut5pfclpz2g8b2ay93zq6.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/178/i2jorygf379gujk38y9ch44r9893r4nc.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-sea portfolio-lightbox"
                       data-gallery="portfolioGallerysea"
                       style="position: absolute; left: 0; top: 7096.19px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/178/50_50_1/i2jorygf379gujk38y9ch44r9893r4nc.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/178/600_600_1/i2jorygf379gujk38y9ch44r9893r4nc.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/e75/wiazsiq66vrhvy0taen7s82xofck0r6p.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-sea portfolio-lightbox"
                       data-gallery="portfolioGallerysea"
                       style="position: absolute; left: 705.538px; top: 7599.72px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/e75/50_50_1/wiazsiq66vrhvy0taen7s82xofck0r6p.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/e75/600_600_1/wiazsiq66vrhvy0taen7s82xofck0r6p.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>
                    <a href="https://pod-tapochki.ru/upload/iblock/327/qcp03friqt3hyfz5diuscbmx4rk2xd90.jpg"
                       class="col-lg-4 col-md-6 portfolio-item filter-sea portfolio-lightbox"
                       data-gallery="portfolioGallerysea"
                       style="position: absolute; left: 1411.08px; top: 7648.37px; display: none;">
                        <img src="https://pod-tapochki.ru/upload/resize_cache/iblock/327/50_50_1/qcp03friqt3hyfz5diuscbmx4rk2xd90.jpg"
                             class="img-fluid jq-lazyload"
                             data-src="https://pod-tapochki.ru/upload/resize_cache/iblock/327/600_600_1/qcp03friqt3hyfz5diuscbmx4rk2xd90.jpg"
                             alt="Картинка" title="Это фото интерьера можно раскрыть, кликните по нему">
                    </a>

                -->
                </div>
                <div class="row text-center align-content-center aos-init aos-animate" data-aos="fade-up"
                     data-aos-delay="500">
                    <div><a class="btn btn-dark scrollto" href="#portfolio">Посмотреть другой стиль</a></div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <style>
            .cta {
                background: linear-gradient(rgba(2, 2, 2, 0.7), rgba(0, 0, 0, 0.7)), url("<?= $imageForCtaSection ?>") fixed center center;
                background-size: cover;
                padding: 120px 0;
            }
        </style>

        <section id="cta" class="cta">
            <div class="container-fluid" data-aos="zoom-in">
                <div class="text-center">

                    <!--Включаемая область текста секции "Оставить заявку"-->
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "COMPONENT_TEMPLATE" => ".default",
                            "PATH" => "/local/include/section_form_inc.php"
                        ),
                        false
                    );
                    ?>

                    <a class="cta-btn" data-bs-toggle="modal" data-bs-target="#callbackModal" style="cursor: pointer">Оставить
                        заявку</a> <a class="cta-btn scrollto" href="#contact">Контактная информация</a>
                </div>
            </div>
        </section>

        <style>
            #about img.img-fluid {
                border-radius: 30px;
            }
        </style>
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container mt-5">

                <!--Цикл который выводит этапы работы в отдельных включаемых областях-->
                <?php
                $stages = [
                    "stage_first_inc.php",
                    "stage_second_inc.php",
                    "stage_third_inc.php",
                    "stage_fourth_inc.php",
                    "stage_fifth_inc.php"
                ];

                foreach ($stages as $index => $stage) {
                    $stageId = "stage" . ($index + 1); ?>
                    <div class="row mt-5 align-items-center" id="<?= $stageId ?>">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "COMPONENT_TEMPLATE" => ".default",
                                "PATH" => "/local/include/" . $stage
                            ),
                            false
                        );
                        ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <!--    <section id="clients" class="clients">-->
        <!--      <div class="container-fluid" data-aos="zoom-in">-->
        <!---->
        <!--        <div class="row d-flex align-items-center">-->
        <!---->
        <!--          <div class="col-lg-2 col-md-4 col-6">-->
        <!--            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">-->
        <!--          </div>-->
        <!---->
        <!--          <div class="col-lg-2 col-md-4 col-6">-->
        <!--            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">-->
        <!--          </div>-->
        <!---->
        <!--          <div class="col-lg-2 col-md-4 col-6">-->
        <!--            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">-->
        <!--          </div>-->
        <!---->
        <!--          <div class="col-lg-2 col-md-4 col-6">-->
        <!--            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">-->
        <!--          </div>-->
        <!---->
        <!--          <div class="col-lg-2 col-md-4 col-6">-->
        <!--            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">-->
        <!--          </div>-->
        <!---->
        <!--          <div class="col-lg-2 col-md-4 col-6">-->
        <!--            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">-->
        <!--          </div>-->
        <!---->
        <!--        </div>-->
        <!---->
        <!--      </div>-->
        <!--    </section>-->
        <!-- End Clients Section -->

        <!-- ======= Pricing Section ======= -->
        <!--    <section id="pricing" class="pricing">-->
        <!--      <div class="container-fluid">-->
        <!---->
        <!--        <div class="section-title">-->
        <!--          <span>Pricing</span>-->
        <!--          <h2>Pricing</h2>-->
        <!--          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>-->
        <!--        </div>-->
        <!---->
        <!--        <div class="row">-->
        <!---->
        <!--          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">-->
        <!--            <div class="box">-->
        <!--              <h3>Free</h3>-->
        <!--              <h4><sup>$</sup>0<span> / month</span></h4>-->
        <!--              <ul>-->
        <!--                <li>Aida dere</li>-->
        <!--                <li>Nec feugiat nisl</li>-->
        <!--                <li>Nulla at volutpat dola</li>-->
        <!--                <li class="na">Pharetra massa</li>-->
        <!--                <li class="na">Massa ultricies mi</li>-->
        <!--              </ul>-->
        <!--              <div class="btn-wrap">-->
        <!--                <a href="#" class="btn-buy">Buy Now</a>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!---->
        <!--          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">-->
        <!--            <div class="box featured">-->
        <!--              <h3>Business</h3>-->
        <!--              <h4><sup>$</sup>19<span> / month</span></h4>-->
        <!--              <ul>-->
        <!--                <li>Aida dere</li>-->
        <!--                <li>Nec feugiat nisl</li>-->
        <!--                <li>Nulla at volutpat dola</li>-->
        <!--                <li>Pharetra massa</li>-->
        <!--                <li class="na">Massa ultricies mi</li>-->
        <!--              </ul>-->
        <!--              <div class="btn-wrap">-->
        <!--                <a href="#" class="btn-buy">Buy Now</a>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!---->
        <!--          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">-->
        <!--            <div class="box">-->
        <!--              <h3>Developer</h3>-->
        <!--              <h4><sup>$</sup>29<span> / month</span></h4>-->
        <!--              <ul>-->
        <!--                <li>Aida dere</li>-->
        <!--                <li>Nec feugiat nisl</li>-->
        <!--                <li>Nulla at volutpat dola</li>-->
        <!--                <li>Pharetra massa</li>-->
        <!--                <li>Massa ultricies mi</li>-->
        <!--              </ul>-->
        <!--              <div class="btn-wrap">-->
        <!--                <a href="#" class="btn-buy">Buy Now</a>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!---->
        <!--        </div>-->
        <!---->
        <!--      </div>-->
        <!--    </section>-->
        <!-- End Pricing Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid">

                <!--Включаемая область текста секции "Отзывы наших клиентов"-->
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH" => "/local/include/section_clients_reviews_inc.php"
                    ),
                    false
                );
                ?>

                <div class="row">


                    <!-- <div class="slick-autoplay slick-initialized slick-slider">
                         <button class="slick-prev slick-arrow" aria-label="Previous" type="button">Previous
                         </button>
                         <div class="slick-list draggable">
                             <div class="slick-track"
                                  style="opacity: 1; width: 7623px; transform: translate3d(-1815px, 0, 0);">-->
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "reviews_template",
                        array(
                            "IBLOCK_TYPE" => "content",
                            "IBLOCK_ID" => "8",
                            "NEWS_COUNT" => "20",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            // передать все параметры
                        ),
                        false
                    );
                    ?>
                </div>
                <!-- End Team Section -->

                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container-fluid">

                        <!--Включаемая область текста секции "Наши контакты"-->
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "COMPONENT_TEMPLATE" => ".default",
                                "PATH" => "/local/include/section_contacts_inc.php"
                            ),
                            false
                        );
                        ?>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="info-box mb-4">
                                    <i class="bx bx-map"></i>
                                    <h3>Адрес</h3>
                                    <p><?= $fullAddress ?></p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="info-box  mb-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Почта</h3>
                                    <p><a href="mailto:<?= $email ?>">info@pod-tapochki.ru</a></p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="info-box  mb-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Телефон</h3>
                                    <p><a href="tel:<?= $cleanPhone ?>"><?= $phone ?></a></p>
                                </div>
                            </div>

                        </div>

                        <div class="row">


                            <div class="col-lg-6 order-2 order-lg-1">
                                <script type="text/javascript" charset="utf-8" async
                                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac2c9d1ba26aacda36d6c5a1c7bf1aa37ee31687993ba67dbeca7cd220c837b04&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                            </div>

                            <div class="col-lg-6 order-1 order-lg-2">
                                <form action="forms/contact.php" method="post" role="form"
                                      class="php-email-form">
                                    <div class="row"><h3>Оставьте заявку и мы перезвоним!</h3></div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" class="form-control" id="name"
                                                   placeholder="Имя" required>
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <input type="text" class="form-control phone-mask" name="phone"
                                                   placeholder="Номер телефона" required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5"
                                                  placeholder="Комментарий (необязательно)"></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Сохраняем заявку</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message"><?php if (date('H') > 10 && date('H') < 20): ?>Получили заявку, сейчас перезвоним!<?php else: ?>Получили заявку, в ближайшее время перезвоним!<?php endif; ?></div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit">Отправить</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </section><!-- End Contact Section -->
    </main><!-- End #main -->
<?= require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>