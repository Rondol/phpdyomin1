<?php
$mysqli = new mysqli("localhost", "root") or die ("Невозможно подключиться к серверу");
$mysqli->select_db("labainet") or die("Нет такой таблицы!");
 $zapros="DELETE FROM proglang WHERE id=" . $_GET['id'];
$mysqli->query($zapros);
 header("Location: langMain.php");
 exit;
?>