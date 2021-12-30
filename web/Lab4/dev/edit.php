<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], false);
?>
<html>
<head>
<title> Редактирование данных о разработчике </title>
</head>
<body>
<?php
require "../bd.php";
$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db($dbName) or die("Нет такой таблицы!");
 $rows=$mysqli->query("SELECT name, city FROM developer WHERE
id=".$_GET['id']);
 while ($st = $rows->fetch_array()) {
 $id=$_GET['id'];
 $name = $st['name'];
 $city = $st['city'];
 }
print "<form action='save_edit.php' metod='get'>";
print "Имя: <input name='name' size='50' type='text'
value='".$name."'>";
print "<br>Город: <input name='city' size='50' type='text'
value='".$city."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"devMain.php\"> Вернуться к списку
разработчиков </a>";
?>
</body>
</html>