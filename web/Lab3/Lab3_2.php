<meta charset="utf-8">
<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<p>Сравнение:</p>
<FORM method="post" action="<?php print $_SERVER['PHP_SELF'] ?>">
а: <INPUT type="text" name="a" size="3">
b: <INPUT type="text" name="b" size="3">
<P> <INPUT type="submit" name="click" value="Вычислить">
<SELECT NAME="operation" SIZE="1">
<OPTION VALUE="1" SELECTED> сложение
<OPTION VALUE="2"> вычитание
<OPTION VALUE="3"> умножение
<OPTION VALUE="4"> деление
</SELECT>
</FORM>
<?
if (isset($_POST["click"])) {
    $a=$_POST["a"];
    $b=$_POST["b"];
    $op=$_POST["operation"];
    if (is_numeric($a)&&is_numeric($b)) {
        switch ($op) {
            case "1":
            $out1="Сложение";
            $out2=$a+$b;
            break;
            case 2:
            $out1="Вычитание";
            $out2=$a-$b;
            break;
            case 3:
            $out1="Умножение";
            $out2=$a+$b;
            break;
            case 4:
            $out1="Деление";
            if ($b!=0) {
                $out2=$a/$b;
            } else {
                $out2="NAN";
            }
            break;
        }
        echo ($out1." чисел ".$a." и ".$b." даст: ".$out2);
    } else {
        echo ("Операция успешно провалена. Вы не ввели числовые значения");
    }

}
?>
</BODY>
</HTML>