<html>
<head> <title> Сведения о языках программирования </title>
<meta charset="utf-8"></head>
<body>
<?php
$mysqli = new mysqli("localhost", "root") or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db("labainet") or die("Нет такой таблицы!");
?>
<h2>Языки программирования:</h2>
<table border="1">
<tr>
 <th> Имя </th> <th> Тип1 </th> <th> Тип клиента </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=$mysqli->query("SELECT id, name, codeType, clientType
FROM proglang"); // запрос на выборку сведений о пользователях
while ($row=$result->fetch_array()){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['codeType'] . "</td>";
echo "<td>" . $row['clientType'] . "</td>";
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
<p> <a href="new.php"> Добавить ваш язык </a>
</body> </html>