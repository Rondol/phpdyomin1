<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<?php
require_once "Lab2_6_lib.php";
$arr;
$n=rand(2,10);
$m=rand(2,10);

printTask16();
fillTable($arr,$n,$n);
print("Изначальная таблица:<br>");
printTable($arr);
print("Сумма элементов главной диагонали:<br>".resolveTask16Main($arr)."<br>Сумма элементов побочной диагонали:<br>".resolveTask16Reverse($arr)."<br><br>");


printTask11();
fillTable($arr,$n,$m);
print("Изначальная таблица:<br>");
printTable($arr);
print("Задача, обработанная по заданию:<br>");
resolveTask11($arr);
printTable($arr);
?>
</BODY>
</HTML>