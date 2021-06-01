<?php
$to = "off.romgolovkov@gmail.com"; // емайл получателя данных из формы
$tema = "Форма регистрации"; // тема полученного емайла
$message = "Ваше ФИО: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "Дата рождения: ".$_POST['date']."<br>"; //полученное из формы name=email
$message .= "Ваш телефон: ".$_POST['tel']."<br>"; //полученное из формы name=phone
$message .= "Удостоверение охраника: ".$_POST['yo']."<br>"; //полученное из формы name=phone
$message .= "Сообщение: ".$_POST['mes']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>