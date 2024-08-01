<?php
use \Bitrix\Main\Config\Option;
$phone = Option::get("askaron.settings", "UF_PHONE");
$cleanPhone = str_replace(" ", "", $phone);
?>

<h3>Понравился интерьер или нужна помощь в выборе?</h3>
<p>Мы проконсультируем по всем вопросам и вместе воплотим все идеи в реальность!<br>Тел. <a
            href="tel:<?= $cleanPhone ?>" style="color: white"><?= $phone ?></a></p>
