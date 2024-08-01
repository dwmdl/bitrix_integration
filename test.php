<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CJSCore::Init();
$APPLICATION->SetPageProperty("title", "тест");
$APPLICATION->SetTitle("тест");

?>

    <!-- TODO: Сделать тип инфоблока  forms и в нем инфб "оставить заявку". Туда добавлять элементы и отправлять формы -->

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
                // передать все параметры
            ),
            false
        );
        ?>
    </div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>