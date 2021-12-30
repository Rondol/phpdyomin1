<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], true);
require "../bd.php";
if (strcmp($_GET['id'],$undeletableID)<>0) {
$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->select_db($dbName) or die("Нет такой таблицы!");
 $zapros="DELETE FROM users WHERE id=" . $_GET['id'];
$mysqli->query($zapros);
}
 header("Location: userMain.php");
 exit;
?>
