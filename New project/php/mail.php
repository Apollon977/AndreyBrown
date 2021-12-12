<?php

$name = $_POST['userName'];
$name2 = $_POST['userName2'];
$phone = $_POST['userTel'];
$phone2 = $_POST['userTel2'];
$technic = $_POST['changeTechnic'];
$msg = $_POST['message'];
$token = "5082482468:AAGIymKkcFcpuvhdDWkL5khB1ummr0rSSD0";
$chat_id = "-687580002";


if($_POST['nameOfForm'] == 'formOne'){
    $name = ($_POST['userName']);
    $phone = ($_POST['userTel']);
    $technic = ($_POST['changeTechnic']);


$arr = [
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
  //   'Техника, которую нужно починить:' => $technic;
    'Техника, которую нужно починить: ' => $technic
  ];

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
  };
  
  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
  alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
} else {
    alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
}
};

if($_POST['nameOfForm2'] == 'formTwo'){
    $name2 = ($_POST['userName2']);
    $phone2 = ($_POST['userTel2']);
    $msg = ($_POST['message']);

$arr = [
    'Имя пользователя: ' => $name2,
    'Телефон: ' => $phone2,
    'Что случилось: ' => $msg
  ];

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
  }; 

  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//   if ($sendToTelegram) {
//     alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
//   } else {
//       alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
//   }
};
?>