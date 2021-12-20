<html>
<head>
<title> Редактирование данных о языке </title>
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root") or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db("labainet") or die("Нет такой таблицы!");
 $rows=$mysqli->query("SELECT name, codeType,
devYear, clientType, author FROM proglang WHERE
id=".$_GET['id']);
 while ($st = $rows->fetch_array()) {
 $id=$_GET['id'];
 $name = $st['name'];
 $codeType = $st['codeType'];
 $devYear = $st['devYear'];
 $clientType = $st['clientType'];
 $author = $st['author'];
 }
print "<form action='save_edit.php' metod='get'>";
print "Имя: <input name='name' size='50' type='text'
value='".$name."'>";
print "<br>Тип1: <input name='codeType' size='50' type='text'
value='".$codeType."'>";
print "<br>Год создания: <input name='devYear' size='50' type='text'
value='".$devYear."'>";
print "<br>Тип клиента: <input name='clientType' size='50' type='text'
value='".$clientType."'>";
print "<br>Автор: <input name='author' size='50' type='text'
value='".$author."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"langMain.php\"> Вернуться к списку
языков </a>";
?>
</body>
</html>