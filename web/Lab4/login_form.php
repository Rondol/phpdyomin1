<html>
<head> <title> Вход </title>
<meta charset="utf-8"></head>
<body>
<form action='login_script.php' metod='post'>
<input name="login" size="50" type="text">
<input name="password" size="50" type="text">
<input type='submit' name='' value='Вход'>
<?php
echo("<input type='hidden' name='returnURL' value='".$_GET['returnURL']."'>");
?>
</form>
</body> </html>