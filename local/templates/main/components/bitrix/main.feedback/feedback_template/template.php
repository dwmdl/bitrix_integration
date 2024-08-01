<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */


use \Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;

$phone = Option::get("askaron.settings", "UF_PHONE");
$cleanPhone = str_replace(" ", "", $phone);
?>

<div class="modal-header">
    <h5 class="modal-title"><?= Loc::getMessage("CALLBACK_MODAL_TITLE") ?></h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php if (!empty($arResult["ERROR_MESSAGE"])): ?>
            <?php foreach ($arResult["ERROR_MESSAGE"] as $error): ?>
                <span class="text-danger"><?= $error; ?></span><br>
            <?php endforeach; ?>
        <?php elseif (!empty($arResult["OK_MESSAGE"])): ?>
            <span class="text-success"><?=$arResult["OK_MESSAGE"]?></span><br>
        <?php endif; ?>
    </div>
</div>
<br>

<div class="modal-body">

    <p><?= Loc::getMessage("CALLBACK_MODAL_PHONE_PROMPT") ?><a href="tel:<?= $cleanPhone ?>"><?= $phone ?></a>
        <?= Loc::getMessage("CALLBACK_MODAL_PHONE_SELF") ?></p>

    <p class="messengers"><?= Loc::getMessage("CALLBACK_MODAL_MESSENGERS") ?><span class="icons"><a
                    href="https://t.me/DronSochi_7"
                    class="telegram" target="_blank"
                    title="Мы в телеграме"><i
                        class="bi bi-telegram"></i></a></span>
        <a href="https://wa.me/79885887773?text=Здравствуйте!" class="whatsapp"
           title="Мы в WhatsApp"><i class="bi bi-whatsapp"></i></a>
    </p>

    <form class="callback-modal" method="POST" action="<?= POST_FORM_ACTION_URI ?>">
        <?= bitrix_sessid_post() ?>

        <p class="success-text" style="display: none;"><?= Loc::getMessage("CALLBACK_MODAL_SUCCESS") ?></p>

        <div class="mb-3">
            <label for="callbackControlInput1"
                   class="form-label"><?= Loc::getMessage("CALLBACK_MODAL_NAME_LABEL") ?></label>
            <input name="user_name" type="text" class="form-control" id="callbackControlInput1"
                   placeholder="<?= Loc::getMessage("NAME_PLACEHOLDER") ?> <?= (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])) ? '*' : ''; ?>"/>
        </div>

        <div class="mb-3">
            <label for="callbackControlInput2"
                   class="form-label"><?= Loc::getMessage("CALLBACK_MODAL_PHONE_LABEL") ?></label>
            <input name="user_phone" type="text" class="form-control phone-mask"
                   id="callbackControlInput2" placeholder="<?= Loc::getMessage("PHONE_PLACEHOLDER") ?> <?= (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])) ? '*' : ''; ?>"/>
        </div>

        <div class="mb-5 text-center">
            <input type="submit" name="submit" class="btn btn-success"
                   value="<?= Loc::getMessage("CALLBACK_MODAL_SUBMIT") ?>">
        </div>

        <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
    </form>

</div>

