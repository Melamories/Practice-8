<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$course = $_POST['course'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com'; #Тут нужен хостинг, которого у меня нет#

$email_subject = 'Новый запрос';

$email_body = "Имя пользователя: $name.\n".
               "E-mail пользователя: $visitor_email.\n".
                "Курс и специальность пользователя: $course.\n".
                 "Сообщение: $message.\n".

$to = 'angelina.angel.pusya@gmail.com';

$headers = "Для: $email_from \r\n";

$headers .= "Ответить на: $visitor_email \r\n";


mail ($to, $email_subject,$email_body,$headers);

header("Location: Second.html")

?>