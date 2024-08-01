<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php foreach ($arResult["ITEMS"] as $arItem) :
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <script>console.log(<?=\CUtil::PhpToJsObject($arItem)?>)</script>
    <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <a href="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
           class="col-lg-4 col-md-6 portfolio-item filter-<?= $arItem['PROPERTIES']['INTERIOR_FILTER']['VALUE'] ?> portfolio-lightbox"
           data-gallery="portfolioGallery<?= $arItem['PROPERTIES']['INTERIOR_FILTER']['VALUE'] ?>" style="position: absolute; left: 0; top: 0;">
            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                 class="img-fluid jq-lazyload"
                 data-src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                 alt="Картинка" title="<?= $arItem['NAME'] ?>">
        </a>
    </div>

<?php endforeach; ?>