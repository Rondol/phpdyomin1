<p> Арифметические операции:
<p>
<?php
 $a=rand(-20,20);
 $b=rand(-20,20);
 $c=rand(-20,20);
 $d=rand(-20,20);
 print ('а='.$a.', b='.$b.', c='.$c.',d='.$d.'<br>');
 print ('Для пятнадцатого варианта: (2*' . $c . '-' . $d . ')/(' . $a . '/4-1)' . '=' . (2*$c-$d)/($a/4-1) . '<br>');
 print ('Для одиннадцатого варианта: ((' . $c . '-' . $d . '/2)*('.$b.'-7))/(2*' . $a . '-1)' . '=' . (($c-$d/2)*($b-7))/(2*$a-1) . '<br>');
?>