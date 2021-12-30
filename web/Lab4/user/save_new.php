<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], true);
require "../bd.php";
 // Подключение к базе данных:
$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // Тип кодировки
 $mysqli->select_db($dbName) or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 $encodedPass=sha1($_GET['password']);
 $sql_add = "INSERT INTO users (id, username, password, type) VALUES (NULL, '{$_GET['name']}', '{$encodedPass}', '{$_GET['type']}')";
 $mysqli->query($sql_add); // Выполнение запроса
 if ($mysqli->affected_rows>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы зарегистрировали пользователя в базе данных.";
 print "<p><a href=\"userMain.php\"> Вернуться к списку
пользователей </a>"; }
 else { print "Ошибка сохранения. <a href=\"userMain.php\">
Вернуться к списку пользователей </a>"; }



?>


