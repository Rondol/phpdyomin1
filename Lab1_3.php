<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<?php
$n=rand(1, 10000);
$m=rand($n, 10000);
echo('<p>В интервале от '.$n.' до '.$m. ' следующие числа разложимы на сумму трёх кубов целых чисел:<p><br>');
for ($i=$n; $i<=$m; ++$i) {
	if ($i%4<>0 && $i%5<>0) { //Вычисление на основе гипотезы
		echo($i . '<br>');
	}
}
?>
</BODY>
</HTML>