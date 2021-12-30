<?php
session_start();
require "bd.php";
$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db($dbName) or die("Нет такой таблицы!");
$rows=$mysqli->query("SELECT username, password, id, type FROM users");
$_SESSION['type']=0;
while ($st=$rows->fetch_array()) {
 $login = $st['username'];
 $password = $st['password'];
 if (strcmp($login,$_GET['login'])==0&&strcmp($password,sha1($_GET['password']))==0) {
 	$_SESSION['login']=$login;
 	$_SESSION['id']=$st['id'];
 	$_SESSION['type'] = $st['type'];
 	header("Location: ".$_GET['returnURL']);
 	exit;
 }
}
 header("Location: login_form.php?returnURL=".$_GET['returnURL']);
 exit;
?>