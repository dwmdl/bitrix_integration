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
<?php foreach ($arResult["ITEMS"] as $arItem):
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="col-12 col-sm-6 col-md-4 col-lg mt-4 d-flex align-items-stretch" data-aos="fade-up"
         id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <a class="icon-box scrollto" href="#<?= $arItem['CODE'] ?>">
            <div class="icon"><i class="bx bx-<?= $arItem['PROPERTIES']['ICON_CODE']['VALUE'] ?>"></i></div>
            <h4><?= $arItem['NAME'] ?></h4>
            <p><?= $arItem['~PREVIEW_TEXT'] ?></p>
        </a>
    </div>

<?php endforeach; ?>
