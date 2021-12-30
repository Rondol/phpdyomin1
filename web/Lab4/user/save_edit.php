<?php
require "../login.php";
session_start();
$isSelfChange = true;
if ($_SESSION['id']==$_GET['id']) {
    $isSelfChange=false;
}
checkLogin($_SERVER['REQUEST_URI'], $isSelfChange);
?>
<html> <body>
<?php
require "../bd.php";
$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db($dbName) or die("Нет такой таблицы!");
 $zapros="UPDATE users SET username='".$_GET['name'].
"', password='".sha1($_GET['password'])."', type='"
.$_GET['type']."' WHERE id="
.$_GET['id'];
$mysqli->query($zapros);
 if ($mysqli->affected_rows>0) {
 echo 'Все сохранено. <a href="userMain.php"> Вернуться к списку
языков </a>'; }
 else { echo 'Ошибка сохранения. <a href="userMain.php">
Вернуться к списку языков</a> '; }
?>
</body> </html>