<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], false);
 // Подключение к базе данных:
require "../bd.php";
$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // Тип кодировки
 $mysqli->select_db($dbName) or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO developer (id, name, city) VALUES (NULL, '{$_GET['name']}', '{$_GET['city']}')";
 $mysqli->query($sql_add); // Выполнение запроса
 if ($mysqli->affected_rows>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы зарегистрировались в базе данных.";
 print "<p><a href=\"devMain.php\"> Вернуться к списку
разработчиков </a>"; }
 else { print "Ошибка сохранения. <a href=\"devMain.php\">
Вернуться к списку разработчиков </a>"; }



?>


