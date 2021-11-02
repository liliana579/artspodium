<?php

$name = strip_tags(htmlspecialchars($_POST['name']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));



$to = "stydiaoblako@mail.ru"; // Здесь писать e-mail кому придет сообщение
$subject = "Заказ на обратный звонок от:  $name";
$body = "На вашем сайте был визит и сделан заказ на обратный звонок.\n\n"."\nИмя: $name\n\nТема сообщений: $subject\nСообщение: $message";
$header = "From: service@argynbek.kz\n"; // Здесь писать e-mail от которого идет сообщениие



if(!mail($to, $subject, $body, $header))
  http_response_code(500);

  $redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
  header("Location: $redirect");
  exit(); // чтобы мы оставались на странице с формой //


?>
