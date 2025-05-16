<?php
$to = "trizenhelp@gmail.com";
$subject = "Новая заявка на Админку";

$uid = htmlspecialchars($_POST['uid']);
$age = htmlspecialchars($_POST['age']);
$panel = htmlspecialchars($_POST['panel']);
$conflict = htmlspecialchars($_POST['conflict']);
$why = htmlspecialchars($_POST['why']);

$message = "📝 Новая заявка на админку:\n\n";
$message .= "1) UID: $uid\n";
$message .= "2) Возраст: $age\n";
$message .= "3) Опыт с админ-панелью: $panel\n";
$message .= "4) Решение конфликтов: $conflict\n";
$message .= "5) Причина вступления в админку:\n$why\n";

$headers = "From: no-reply@" . $_SERVER['SERVER_NAME'] . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";

if (mail($to, $subject, $message, $headers)) {
    header("Location: success.html");
    exit;
} else {
    header("Location: error.html");
    exit;
}
?>
