<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav id="navbar" class="navbar">
    <ul>
        <?php if (!empty($arResult)):?>
                <?php
                foreach($arResult as $arItem):
                    if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                        continue;
                    ?>
                    <?if($arItem["SELECTED"]):?>
                    <li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
                <?php else:?>
                    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?php endif?>
                <?php endforeach?>
        <?php endif?>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->



<!--        <li><a class="nav-link scrollto active" href="#hero" title="Самый верх сайта">В начало</a></li>-->
<!--        <li><a class="nav-link scrollto" href="#services">Услуги</a></li>-->
<!--        <li><a class="nav-link scrollto " href="#portfolio" title="То, за что нас выбирают">Интерьер</a></li>-->
<!--        <li><a class="nav-link scrollto" href="#about">Этапы ремонта</a></li>-->
<!--          <li><a class="nav-link scrollto" href="#pricing">Цены</a></li>-->
<!--        <li><a class="nav-link scrollto" href="#team">Отзывы</a></li>-->
<!--        <li><a class="nav-link scrollto" href="#contact">Контакты</a></li>-->