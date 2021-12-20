<?php
 // Подключение к базе данных:
$mysqli = new mysqli("localhost", "root") or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // Тип кодировки
 $mysqli->select_db("labainet") or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO apl (id, name, ver, devYear, id_lang, id_dev) VALUES (NULL, '{$_GET['name']}', '{$_GET['ver']}', '{$_GET['devYear']}', '{$_GET['id_lang']}', '{$_GET['id_dev']}')";
 $mysqli->query($sql_add); // Выполнение запроса
 if ($mysqli->affected_rows>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы зарегистрировали программу в базе данных.";
 print "<p><a href=\"aplMain.php\"> Вернуться к списку
программ </a>"; }
 else { print "Ошибка сохранения. <a href=\"aplMain.php\">
Вернуться к списку программ </a>"; }



?>


