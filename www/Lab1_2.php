<?php
print ("<p> Супер табличка: <br>");
for ($j=0; $j<=9; ++$j) {
    for ($i=1; $i<=10; ++$i) {
        echo($i+$j*10 . " ");
    }
    echo("<br>");
}
?>