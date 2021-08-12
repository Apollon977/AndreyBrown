<?php

$siteType = $_POST['mainType'];
$siteDesign = $_POST['mainDesign'];
$siteAdaptive = $_POST['mainAdaptive'];
$currentName = $_POST['userName'];
$email = $_POST['userEmail'];
$tel = $_POST['userTel'];
echo "Скрипт сработал! <br>". $siteType. "<br>". $siteDesign. "<br>". $siteAdaptive. "<br>". $currentName. "<br>". $email. "<br>". $tel;
?>