<html>
<head> <title> Сведения о программах </title>
<meta charset="utf-8"></head>
<body>
<?php
$mysqli = new mysqli("localhost", "root") or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db("labainet") or die("Нет такой таблицы!");
?>
<h2>Программы:</h2>
<table border="1">
<tr>
 <th> Имя </th> <th> Версия </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=$mysqli->query("SELECT id, ver, name
FROM apl"); // запрос на выборку сведений о пользователях
while ($row=$result->fetch_array()){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['ver'] . "</td>";
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
<p> <a href="new.php"> Добавить вашу программу </a>
<form action='generate_pdf.php' metod='post'>
<input type='submit' name='' value='Сохранить файл в pdf'>
</form>
<form action='generate_excel.php' metod='post'>
<input type='submit' name='' value='Сохранить файл в excel формате'>
</form>
</body> </html>