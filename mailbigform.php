<?php

$recepient = "piramidowskii@mail.ru";
$sitename = "Торговый Дом ОВК";

$name = trim($_POST["name2"]);
$phone = trim($_POST["phone2"]);
$comment = trim($_POST["comment"]);
$message = "e-mail: $name \nТелефон: $phone\n Сообщение: $comment\n";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>