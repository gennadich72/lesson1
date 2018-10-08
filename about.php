<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lesson1</title>
</head>
<body>
<?php
//Вводим переменные
$UserName = "Андрей";
$Age = 47;
$UserEmail = "at-arb@yandex.ru";
$UserCity = "Ахтубинск";
$UserAbout = "Заведующий информационно вычислительного отдела";
?>
<!--Вывод переменных-->
<h1>Информация о пользователе <?php echo($UserName)?></h1>
<dl>
    <dt>Имя</dt>
        <dd><?php echo ($UserName);?></dd>
    <dt>Возраст</dt>
        <dd><?php echo($Age);?></dd>
    <dt>Электронная почта</dt>
        <dd>
            <a href="mailo:<?php  echo($UserEmail)?>"><?php  echo($UserEmail)?></a>
        </dd>
    <dt>Город</dt>
        <dd><?php echo($UserCity)?></dd>
    <dt>Краткий текст о себе</dt>
        <dd><?php echo($UserAbout)?></dd>
</dl>
</body>
</html>


