<?php
 // Подключение к базе данных:
$mysqli = new mysqli("localhost", "root") or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // Тип кодировки
 $mysqli->select_db("labainet") or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO proglang (id, name, codeType, devYear, clientType, author) VALUES (NULL, '{$_GET['name']}', '{$_GET['codeType']}', '{$_GET['devYear']}', '{$_GET['clientType']}', '{$_GET['author']}')";
 $mysqli->query($sql_add); // Выполнение запроса
 if ($mysqli->affected_rows>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы зарегистрировали язык в базе данных.";
 print "<p><a href=\"langMain.php\"> Вернуться к списку
языков </a>"; }
 else { print "Ошибка сохранения. <a href=\"langMain.php\">
Вернуться к списку языков </a>"; }



?>


