<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<?php
$a=rand(-100,100);
$b=rand(-100,100);
$z=sin(f11($b,$a)+sqrt(abs(f11($a,$b))));
print("Значение z при a=$a и b=$b по формуле 11 варианта: $z");
$z=log(abs(f16($a/$b,sin($a))))+f16($b,sqrt($a+$b));
print("<br>Значение z при a=$a и b=$b по формуле 16 варианта: $z");

function f11($u,$t) {
    if ($u>2) {
        return pow($u*$u+$t,1/3)*pow(sin($t),2);
    } else {
        return log(abs(pow($u,2)/($u+$t)));
    }
}

function f16($u,$t) {
    if ($u>$t) {
        return log(abs($u+4))/sqrt(abs($t-3));
    } else {
        return (pow($u,4)+$t)/cos($u+pi()/4);
    }
}
?>
</BODY>
</HTML>