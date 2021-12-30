<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], false);
?>
<html>
<head> <title> Добавление нового языка </title> </head>
<body>
<H2>Регистрация на сайте:</H2>
<form action="save_new.php" metod="get">
 Имя: <input name="name" size="50" type="text">
<br>Тип: <input name="codeType" size="50" type="text">
<br>Год разработки: <input name="devYear" size="50" type="text">
<br>Тип клиента: <input name="clientType" size="50" type="text">
<br>Автор: <input name="author" size="50" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="langMain.php"> Вернуться к списку языков </a>
</body>
</html>