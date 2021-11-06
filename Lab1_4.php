<?php
$n=rand(1, 10000);
echo('<p>Характер числа '.$n.':<p><br>0');
$sum=0;
for ($i=2; $i<=$n-1; ++$i) {
	if ($n%$i==0 ) {
		echo('+'.$i);
		$sum+=$i;
	}
}
echo('='.$sum . '<br>');
?>