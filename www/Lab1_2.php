<HTML>
<TITLE> Таблица умножения </TITLE>
<BODY>

<p> Супер табличка: <br>
<p>

<TABLE border=1>
<?php
for ($i=0; $i<=9; $i++) { // запускаем первый цикл
    echo ("<tr>"); // начало строки таблицы
    for ($j=1; $j<=10; $j++) { // запускаем второй цикл
        echo ("<td align=center>"); // открываем ячейку таблицы
        $inTableNum = $j+$i*10; // находим число
        if ($inTableNum%2==0) {
            echo ('<p><font color="red">'.$inTableNum.'</font>'); // выводим его,
        } else {
            echo ($inTableNum);
        }
        echo ("</td>"); // а потом закрываем ячейку
    }
    echo ("</tr>"); // конец строки таблицы
}
?>
</TABLE>
</BODY>
</HTML>