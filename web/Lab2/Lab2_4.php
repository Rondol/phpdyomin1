<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<?php
$n=rand(3, 30);
$arr=array();
for ($i=0; $i<$n; $i++) {
    $arr[$i]=rand(-1000,1000);
}
print("Изначальный массив: <br>");
for ($i=0; $i<count($arr); $i++) {
    print($arr[$i]." ");
}

$sum=0;
for ($i=0; $i<count($arr); $i++) {
    if (abs($arr[$i])<pow($i,2)) {
        $sum+=$arr[$i];
    }
}
print("<br> Сумма элементов массива |a[i]| < i^2: ".$sum);

for ($i=1; $i<count($arr); $i+=2) {
    $b=$arr[$i];
    $arr[$i]=$arr[$i-1];
    $arr[$i-1]=$b;
}
print("<br> Массив, с поменянными местами чётным и нечётным индексами.: <br>");
for ($i=0; $i<count($arr); $i++) {
    print($arr[$i]." ");
}
?>
</BODY>
</HTML>