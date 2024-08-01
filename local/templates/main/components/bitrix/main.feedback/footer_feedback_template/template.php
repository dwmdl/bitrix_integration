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

use Bitrix\Main\Localization\Loc;

?>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php if (!empty($arResult["ERROR_MESSAGE"])): ?>
            <?php foreach ($arResult["ERROR_MESSAGE"] as $error):  ?>
                <span class="text-danger"><?= $error; ?></span><br>
            <?php endforeach; ?>
        <?php elseif (!empty($arResult["OK_MESSAGE"])): ?>
            <span class="text-success"><?= $arResult["OK_MESSAGE"] ?></span><br>
        <?php endif; ?>
    </div>
</div>
<br>

<form class="php-email-form" method="POST" action="<?= POST_FORM_ACTION_URI ?>">
    <?= bitrix_sessid_post() ?>

    <div class="row">
        <h3><?= Loc::getMessage("TITLE") ?></h3>
    </div>

    <div class="row">
        <div class="col-md-6 form-group">
            <input type="text" name="user_name" class="form-control" id="name"
                   placeholder="<?= Loc::getMessage("NAME_PLACEHOLDER") ?><?= (empty
                       ($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])) ? '*' :
                       ''; ?>"/>
        </div>

        <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control phone-mask" name="user_phone"
                   placeholder="<?= Loc::getMessage("PHONE_PLACEHOLDER") ?><?= (empty
                       ($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])) ? '*' :
                       ''; ?>"/>
        </div>
    </div>

    <div class="form-group mt-3">
                            <textarea class="form-control" name="MESSAGE" rows="5"
                                      placeholder="<?= Loc::getMessage("MESSAGE_PLACEHOLDER") ?><?= (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])) ? '*' : ''; ?>"><?= $arResult["MESSAGE"] ?></textarea>
    </div>

    <div class="my-3">
        <div class="loading"><?= Loc::getMessage("LOADING_SAVE") ?></div>
        <div class="error-message"></div>
        <div class="sent-message"><?php if (date('H') > 10 && date('H') < 20): Loc::getMessage
            ("SENT_MESSAGE_NOW") ?><?php else: Loc::getMessage("SENT_MESSAGE_LATER") ?><?php endif; ?></div>
    </div>

    <div class="text-center">
        <button type="submit" name="submit"><?= Loc::getMessage("SUBMIT") ?></button>
    </div>

    <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">

</form>


