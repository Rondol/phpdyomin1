<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], true);
?>
<html>
<head> <title> Добавление нового пользователя </title> </head>
<body>
<H2>Регистрация на сайте:</H2>
<form action="save_new.php" metod="get">
 Логин: <input name="name" size="50" type="text">
<br>Пароль: <input name="password" size="50" type="text">
<br>Тип: <input name="type" size="3" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="userMain.php"> Вернуться к пользователей </a>
</body>
</html>