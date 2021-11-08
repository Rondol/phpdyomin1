<?php
function printTask16() {
    echo("Задание(16 вариант): В квадратной матрице A порядка N найти сумму элементов, расположенных на главной
диагонали, и произведение элементов, расположенных на побочной диагонали.<br>");
}

function printTask11() {
    echo("Задание(11 вариант): Заменить значение каждого элемента двумерной таблицы A(m,n) на сумму элементов,
соседних с ним в строке, оставляя границу массива неизменной.<br>");
}

function fillTable(&$arr,$n, $m) {
    $arr=array();
    for ($i=0; $i<$n; $i++) {
        $arr[$i]=array();
        for ($j=0; $j<$m; $j++) {
            $arr[$i][$j]=rand(-100,100);
        }
    }
}
function printTable($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        for ($j=0; $j < count($arr[$i]); $j++)
        {
            echo ' | '.$arr[$i][$j];
        }
        echo '<br />';
    }
}
function resolveTask16Main($arr) {
    $mainDiagonalSum=0;
    for ($i = 0; $i < count($arr); $i++) {
        $mainDiagonalSum+=$arr[$i][$i];
    }
    return $mainDiagonalSum;
}

function resolveTask16Reverse($arr) {
    $reverseDiagonalSum=0;
    for ($i = 0; $i < count($arr); $i++) {
        $reverseDiagonalSum+=$arr[$i][count($arr)-$i-1];
    }
    return $reverseDiagonalSum;
}

function resolveTask11(&$arr) {
    $arrOrigin=$arr;
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i][0]=$arrOrigin[$i][1];
        for ($j = 1; $j < count($arr[$i])-1; $j++) {
            $arr[$i][$j]=$arrOrigin[$i][$j-1]+$arrOrigin[$i][$j+1];
        }
        $arr[$i][count($arr[$i])-1]=$arrOrigin[$i][count($arr[$i])-2];
    }
}

 ?>
