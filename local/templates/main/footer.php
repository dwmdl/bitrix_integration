<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Page\Asset;
use \Bitrix\Main\Config\Option;

$phone = Option::get("askaron.settings", "UF_PHONE");
$cleanPhone = str_replace(" ", "", $phone);

$telegram = Option::get("askaron.settings", "UF_TELEGRAM");
$whatsapp = Option::get("askaron.settings", "UF_WHATSAPP");

?>

    <footer id="footer">
        <!--       <div class="footer-top">-->
        <!--      <div class="container-fluid">-->
        <!--        <div class="row">-->

        <!--          <div class="col-lg-4 col-md-6">-->
        <!--            <div class="footer-info">-->
        <!--              <h3>ПодТапочки</h3>-->
        <!--              <p>-->
        <!--                г. Сочи, ул. Московская 22<br>-->
        <!--                ТДЦ "Александрия"<br><br>-->
        <!--                <strong>Телефон:</strong> <a href="tel:+79885887773" style="color: white">+7 988 588 77 73</a><br>-->
        <!--                <strong>Email:</strong> <a href="mailto:info@pod-tapochki.ru" style="color: white">info@pod-tapochki.ru</a><br>-->
        <!--              </p>-->
        <!--              <div class="social-links mt-3">-->
        <!--                  <a href="https://t.me/DronSochi_7" class="telegram" target="_blank"><i class="bi bi-telegram"></i></a>-->
        <!--                  <a href="whatsapp://send?abid=79885887773" class="whatsapp"><i class="bi bi-whatsapp"></i></a>-->
        <!--                  <a href="https://www.instagram.com/podtapochki/" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>-->
        <!--                  <a href="https://www.youtube.com/channel/UCSOrN0UT4qFGdSPkVIQXzmQ" class="youtube" target="_blank"><i class="bi bi-youtube"></i></i></a>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!---->
        <!--          <div class="col-lg-8 col-md-6 footer-links" style="align-items: end">-->
        <!--            <h4>Меню</h4>-->
        <!--            <ul>-->
        <!--              <li><i class="bx bx-chevron-right"></i> <a href="#hero" class="scrollto">Главная</a></li>-->
        <!--              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio" class="scrollto">Интерьеры</a></li>-->
        <!--              <li><i class="bx bx-chevron-right"></i> <a href="#about" class="scrollto">Этапы ремонта</a></li>-->
        <!--              <li><i class="bx bx-chevron-right"></i> <a href="#contact" class="scrollto">Контакты</a></li>-->
        <!--            </ul>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->

        <div class="container">
            <div class="copyright">
                &copy; ПодТапочки
            </div>
            <div class="credits">
                <?= date("Y") ?>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Оставить заявку</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Вы можете нам позвонить по номеру <a href="tel:<?= $cleanPhone ?>"><?= $phone ?></a>
                        самостоятельно
                        или заполнить поля ниже, чтобы мы Вам перезвонили!</p>
                    <p class="messengers">Мы в мессенджерах: <span class="icons"><a href="<?= $telegram ?>"
                                                                                    class="telegram" target="_blank"
                                                                                    title="Мы в телеграме"><i
                                        class="bi bi-telegram"></i></a></span>
                        <a href="<?= $whatsapp ?>" class="whatsapp" title="Мы в WhatsApp"><i
                                    class="bi bi-whatsapp"></i></a></p>
                    <form class="callback-modal" method="POST" action="forms/contact.php">
                        <p class="success-text" style="display: none;">Заявка отправлена! Сейчас перезвоним!</p>
                        <div class="mb-3">
                            <label for="callbackControlInput1" class="form-label">Ваше имя:</label>
                            <input name="name" type="text" class="form-control" id="callbackControlInput1"
                                   placeholder="Введите имя" required>
                        </div>

                        <div class="mb-3">
                            <label for="callbackControlInput2" class="form-label">Номер телефона:</label>
                            <input name="phone" type="text" class="form-control phone-mask" id="callbackControlInput2"
                                   placeholder="<?= $phone ?>" required>
                        </div>

                        <div class="mb-5 text-center">
                            <input type="submit" class="btn btn-success" value="Отправить заявку">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Vendor JS Files -->
<?php
$APPLICATION->ShowHeadScripts();

$jsFiles = [
    "/assets/js/jquery-3.7.1.min.js",
    "/assets/js/jquery.lazyload.min.js",
    "/assets/vendor/aos/aos.js",
    "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
    "/assets/vendor/glightbox/js/glightbox.min.js",
    "/assets/vendor/isotope-layout/isotope.pkgd.min.js",
    "/assets/vendor/swiper/swiper-bundle.min.js",
    "/assets/vendor/php-email-form/validate.js",
    "/assets/js/imask.js",
    "/assets/vendor/slick/slick.min.js",
    "/assets/js/main.js"
];

foreach ($jsFiles as $file) {
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . $file);
}
?>