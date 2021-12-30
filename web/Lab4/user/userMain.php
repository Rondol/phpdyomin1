<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], false);
?>
<html>
<head> <title> Сведения о пользователях </title>
<meta charset="utf-8"></head>
<body>
<?php
require "../bd.php";
$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db($dbName) or die("Нет такой таблицы!");
?>
<h2>Пользователи:</h2>
<table border="1">
<tr>
 <th> Логин </th> <th> Тип </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=$mysqli->query("SELECT id, username, type
FROM users"); // запрос на выборку сведений о пользователях
while ($row=$result->fetch_array()){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['username'] . "</td>";
 if (strcmp($row['type'],'1')==0) {
 echo "<td>Оператор</td>";
 } elseif (strcmp($row['type'],'2')==0) {
 echo "<td>Админ</td>";
 } else {
echo "<td></td>";
 }
 echo "<td><a href='edit.php?id=" . $row['id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id=" . $row['id']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = $result->num_rows; // число записей в таблице БД
print("<P>Всего языков: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить нового пользователя </a>
</body> </html>