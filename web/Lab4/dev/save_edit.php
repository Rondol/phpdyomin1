<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], false);
?>
<html> <body>
<?php
require "../bd.php";
$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db($dbName) or die("Нет такой таблицы!");
 $zapros="UPDATE developer SET name='{$_GET['name']}', name='{$_GET['name']}', city='{$_GET['city']}' WHERE id='{$_GET['id']}'";
$mysqli->query($zapros);
 if ($mysqli->affected_rows>0) {
 echo 'Все сохранено. <a href="devMain.php"> Вернуться к списку
разработчиков </a>'; }
 else { echo 'Ошибка сохранения. <a href="devMain.php">
Вернуться к списку разработчиков</a> '; }
?>
</body> </html>