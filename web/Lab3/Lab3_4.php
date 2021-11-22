<meta charset="utf-8">
<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<p>Логины:</p>
<FORM method="post" action="<?php print $_SERVER['PHP_SELF'] ?>">
Логин: <INPUT type="text" name="login" size="3">
<P> <INPUT type="submit" name="click" value="Войти">
</FORM>
<?
if (isset($_POST["click"])) {
    $login=$_POST["login"];
    $logins = array("Sem" => "Семён Панаев",
               "Roman" => "Роман Дёмин",
               "Rudolf" => "Рудольф Гольфганг",
               "Folfgang" => "Голфьганг Рудольф",);
    $out="";
    foreach($logins as $key => $value)
    {
        if ($key==$login) {
            $out=$value;
        }
    }
    if ($out!="") {
        echo("Здравствуйте, $out");
    } else {
        echo("Такого логина нет");
    }

}
?>
</BODY>
</HTML>