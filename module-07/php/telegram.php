<?php
 
/* https://api.telegram.org/1136312964:AAE8hYtJg1PHFwhoSgVG8X4bIXdhiDkjCkY/getUpdates */
 
//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$name = $_POST['user-name'];
$email = $_POST['user-email'];
$userSubject = $_POST['user-subject'];
$companyName = $_POST['company-name'];
 
//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1136312964:AAE8hYtJg1PHFwhoSgVG8X4bIXdhiDkjCkY";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "489882345";
 
//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  'Имя пользователя: ' => $name,
  'Email' => $email,
  'Subject' => $userSubject,
  'Название компании: ' => $companyName
);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  echo "Thank you";
} else {
  echo "Error";
}
?>