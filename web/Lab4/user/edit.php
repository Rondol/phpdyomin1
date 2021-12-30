<?php
require "../login.php";
session_start();
$isSelfChange = true;
if ($_SESSION['id']==$_GET['id']) {
    $isSelfChange=false;
}
checkLogin($_SERVER['REQUEST_URI'], $isSelfChange);
?>
<html>
<head>
<title> Редактирование данных о языке </title>
</head>
<body>
<?php
require "../bd.php";
$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db($dbName) or die("Нет такой таблицы!");
 $rows=$mysqli->query("SELECT username, password,
type FROM users WHERE
id=".$_GET['id']);
 while ($st = $rows->fetch_array()) {
 $id=$_GET['id'];
 $name = $st['username'];
 $password = $st['password'];
 $type = $st['type'];
 }
print "<form action='save_edit.php' metod='get'>";
print "Логин: <input name='name' size='50' type='text'
value='".$name."'>";
print "<br>Пароль: <input name='password' size='50' type='text'>";
print "<br>Тип: <input name='type' size='50' type='text'
value='".$type."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"userMain.php\"> Вернуться к списку
языков </a>";
?>
</body>
</html>