<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<?php
$treug[]=array();
print("Элементы массива treug: ");
for ($i=1; $i<=10; $i++) {
    $treug[$i-1]=$i*($i+1)/2;
    print($treug[$i-1]." ");
}


$kvd[]=array();
print("<br>Элементы массива kvd: ");
for ($i=1; $i<=10; $i++) {
    $kvd[$i-1]=pow($i,2);
    print($kvd[$i-1]." ");
}

$res=array_merge($treug,$kvd);
print("<br>Элементы массива res: ");
for ($i=0; $i<=count($res); $i++) {
    print($res[$i]." ");
}

print("<br>Элементы отсортированного массива res: ");
sort($res);
for ($i=0; $i<=count($res); $i++) {
    print($res[$i]." ");
}

print("<br>Элементы массива res без первого элемента: ");
unset($res[1]);
for ($i=0; $i<=count($res); $i++) {
    print($res[$i]." ");
}

$res1=array_unique($res);
print("<br>Элементы массива res1: ");
for ($i=0; $i<=count($res1)+1; $i++) {
    print($res1[$i]." ");
}

?>



</BODY>
</HTML>