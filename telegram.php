<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$token = "6161341399:AAF8UVvAB0MX6fp3qmTL4ZxBFy08ICf8-B0";
$chat_id = "445779465";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: success.html');
} else {
  echo "Error";
}
?>