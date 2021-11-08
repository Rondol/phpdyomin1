<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<?php
$r=rand(3,20);
$arr=array();
for ($i=0; $i<$r; $i++) {
    $arr[$i]=rand(10,99);
}

print("Массив из ".$r." элементов, заполненный случайными числами: ");
for ($i=0; $i<$r; $i++) {
    print($arr[$i]." ");
}

print("<br>Отсортированный массив:");
sort($arr);
for ($i=0; $i<$r; $i++) {
    print($arr[$i]." ");
}

print("<br>Обратный отсортированный массив:");
$arr=array_reverse($arr);
for ($i=0; $i<$r; $i++) {
    print($arr[$i]." ");
}

print("<br>Обратный отсортированный массив без последнего элемента:");
array_pop($arr);
for ($i=0; $i<count($arr); $i++) {
    print($arr[$i]." ");
}

$sum=0;
$r=0;
for ($i=0; $i<count($arr); $i++) {
    $sum+=$arr[$i];
    $r+=1;
}
print("<br>Количество элементов: ".$r);
print("<br>Сумма элементов: ".$sum);
print("<br>Средне-арифметическое: ".$sum/$r);
print("<br>Есть ли 50 в массиве?: ");
if (in_array(50, $arr)==true) {
    print("Да");
} else {
    print("Нет");
}

print("<br>Обратный отсортированный массив без последнего элемента с уникальным значениями:");
$arr1=array_unique($arr);
array_unshift($arr1);
for ($i=0; $i<count($arr1); $i++) {
    print($arr1[$i]." ");
}
?>
</BODY>
</HTML>