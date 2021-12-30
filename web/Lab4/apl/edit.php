<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], false);
?>
<html>
<head>
<title> Редактирование данных о программе </title>
</head>
<body>
<?php
require "../bd.php";
$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db($dbName) or die("Нет такой таблицы!");
 $rows=$mysqli->query("SELECT name, id_lang,
devYear, id_dev, ver FROM apl WHERE
id=".$_GET['id']);
 while ($st = $rows->fetch_array()) {
 $id=$_GET['id'];
 $name = $st['name'];
 $id_lang = $st['id_lang'];
 $devYear = $st['devYear'];
 $id_dev = $st['id_dev'];
 $ver = $st['ver'];
 }
print "<form action='save_edit.php' metod='get'>";
print "Имя: <input name='name' size='50' type='text'
value='".$name."'>";
print "<br>Язык: <input name='id_lang' size='50' type='text'
value='".$id_lang."'>";
print "<br>Год создания: <input name='devYear' size='50' type='text'
value='".$devYear."'>";
print "<br>Разработчик: <input name='id_dev' size='50' type='text'
value='".$id_dev."'>";
print "<br>Версия: <input name='ver' size='50' type='text'
value='".$ver."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"aplMain.php\"> Вернуться к списку
языков </a>";
?>
</body>
</html>