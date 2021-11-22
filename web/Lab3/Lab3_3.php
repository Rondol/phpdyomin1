<meta charset="utf-8">
<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<p>Вывод списка:</p>
<FORM method="post" action="<?php print $_SERVER['PHP_SELF'] ?>">
N: <INPUT type="text" name="n" size="3">
<P> <INPUT type="submit" name="click" value="Вычислить">
<SELECT NAME="operation" SIZE="1">
<OPTION VALUE="1" SELECTED> чётные
<OPTION VALUE="2"> нечётные
<OPTION VALUE="3"> простые
<OPTION VALUE="4"> составные
</SELECT>
</FORM>
<?
if (isset($_POST["click"])) {
    $n=$_POST["n"];
    $op=$_POST["operation"];
    if (is_numeric($n)) {
        echo("В диапазоне от 1 до ".$n." есть такие ");

        switch ($op) {
            case 1:
            echo("чётные числа:<br>");
            for ($i=2;$i<=$n;$i+=2) {
                echo($i."<br>");
            }
            break;
            case 2:
            echo("нечётные числа:<br>");
            for ($i=1;$i<=$n;$i+=2) {
                echo($i."<br>");
            }
            break;
            case 3:
            echo("простые числа:<br>");
            for ($i=1;$i<=$n;$i++) {
                if (isPrime($i)) {
                    echo($i."<br>");
                }
            }
            break;
            case 4:
            echo("составные числа:<br>");
            for ($i=1;$i<=$n;$i++) {
                if (!isPrime($i)) {
                    echo($i."<br>");
                }
            }
            break;
        }
    } else {
        echo ("Операция успешно провалена. Вы не ввели натуральное число.");
    }

}
function isPrime($number)
{
        if ($number==2)
                return true;
    if ($number%2==0)
        return false;
    $i=3;
    $max_factor = (int)sqrt($number);
    while ($i<=$max_factor){
        if ($number%$i == 0)
            return false;
        $i+=2;
    }
    return true;
}
?>
</BODY>
</HTML>