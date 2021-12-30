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
 $zapros="UPDATE apl SET name='".$_GET['name'].
"', id_lang='".$_GET['id_lang']."', devYear='"
.$_GET['devYear']."', id_dev='".$_GET['id_dev'].
"', ver='".$_GET['ver']."' WHERE id="
.$_GET['id'];
$mysqli->query($zapros);
 if ($mysqli->affected_rows>0) {
 echo 'Все сохранено. <a href="aplMain.php"> Вернуться к списку
программ </a>'; }
 else { echo 'Ошибка сохранения. <a href="aplMain.php">
Вернуться к списку программ</a> '; }
?>
</body> </html>