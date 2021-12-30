<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], false);
?>
<html>
<head> <title> Добавление новой программы </title> </head>
<body>
<H2>Регистрация программы на сайте:</H2>
<form action="save_new.php" metod="get">
 Имя: <input name="name" size="50" type="text">
<br>Версия: <input name="ver" size="50" type="text">
<br>Разработчик: <input name="id_dev" size="50" type="text">
<br>Язык: <input name="id_lang" size="50" type="text">
<br>Год разработки: <input name="devYear" size="50" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="aplMain.php"> Вернуться к списку программ </a>
</body>
</html>