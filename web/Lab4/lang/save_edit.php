<html> <body>
<?php
$mysqli = new mysqli("localhost", "root") or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db("labainet") or die("Нет такой таблицы!");
 $zapros="UPDATE proglang SET name='".$_GET['name'].
"', codeType='".$_GET['codeType']."', devYear='"
.$_GET['devYear']."', clientType='".$_GET['clientType'].
"', author='".$_GET['author']."' WHERE id="
.$_GET['id'];
$mysqli->query($zapros);
 if ($mysqli->affected_rows>0) {
 echo 'Все сохранено. <a href="langMain.php"> Вернуться к списку
языков </a>'; }
 else { echo 'Ошибка сохранения. <a href="langMain.php">
Вернуться к списку языков</a> '; }
?>
</body> </html>