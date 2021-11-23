
<meta charset="utf-8">
<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<p>Анкета дружелюбия:</p>
<FORM method="post" action="<?php print $_SERVER['PHP_SELF'] ?>">
    Введите ваше имя: <INPUT type="Ваше имя" name="login" size="3">
    <P>  1 Считаете ли Вы, что у многих ваших знакомых хороший характер?
        <INPUT type="radio" name="1" value="1" checked>Да <INPUT type="radio" name="1" value="0">Нет
    <P> 2 Раздражают ли Вас мелкие повседневные обязанности?
        <INPUT type="radio" name="2" value="1" checked>Да <INPUT type="radio" name="2" value="0">Нет
    <P>  3 Верите ли Вы, что ваши друзья преданы Вам?
        <INPUT type="radio" name="3" value="1" checked>Да <INPUT type="radio" name="3" value="0">Нет
    <P>  4 Неприятно ли Вам, когда незнакомый человек делает Вам замечание?
        <INPUT type="radio" name="4" value="1" checked>Да <INPUT type="radio" name="4" value="0">Нет
    <P>  5 Способны ли Вы ударить собаку или кошку?
        <INPUT type="radio" name="5" value="1" checked>Да <INPUT type="radio" name="5" value="0">Нет
    <P>  6 Часто ли Вы принимаете лекарства?
        <INPUT type="radio" name="6" value="1" checked>Да <INPUT type="radio" name="6" value="0">Нет
    <P>  7 Часто ли Вы меняете магазин, в который ходите за продуктами?
        <INPUT type="radio" name="7" value="1" checked>Да <INPUT type="radio" name="7" value="0">Нет
    <P>  8 Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?
        <INPUT type="radio" name="8" value="1" checked>Да <INPUT type="radio" name="8" value="0">Нет
    <P>  9 Тяготят ли Вас общественные обязанности?
        <INPUT type="radio" name="9" value="1" checked>Да <INPUT type="radio" name="9" value="0">Нет
    <P>  11 Способны ли Вы ждать более 5 минут, не проявляя беспокойства?
        <INPUT type="radio" name="10" value="1" checked>Да <INPUT type="radio" name="10" value="0">Нет
    <P>  11 Часто ли Вам приходят в голову мысли о Вашей невезучести?
        <INPUT type="radio" name="11" value="1" checked>Да <INPUT type="radio" name="11" value="0">Нет
    <P>  12 Сохранилась ли у Вас фигура по сравнению с прошлым?
        <INPUT type="radio" name="12" value="1" checked>Да <INPUT type="radio" name="12" value="0">Нет
    <P>  13 Можете ли Вы с улыбкой воспринимать подтрунивание друзей?
        <INPUT type="radio" name="13" value="1" checked>Да <INPUT type="radio" name="13" value="0">Нет
    <P>  14 Нравится ли Вам семейная жизнь?
        <INPUT type="radio" name="14" value="1" checked>Да <INPUT type="radio" name="14" value="0">Нет
    <P>  15 Злопамятны ли Вы?
        <INPUT type="radio" name="15" value="1" checked>Да <INPUT type="radio" name="15" value="0">Нет
    <P>  16 Находите ли Вы, что стоит погода, типичная для данного времени года?
        <INPUT type="radio" name="16" value="1" checked>Да <INPUT type="radio" name="16" value="0">Нет
    <P>  17 Случается ли Вам с утра быть в плохом настроении?
        <INPUT type="radio" name="17" value="1" checked>Да <INPUT type="radio" name="17" value="0">Нет
    <P>  18 Раздражает ли Вас современная живопись?
        <INPUT type="radio" name="18" value="1" checked>Да <INPUT type="radio" name="18" value="0">Нет
    <P>  19 Надоедает ли Вам присутствие чужих детей в доме более одного часа?
        <INPUT type="radio" name="19" value="1" checked>Да <INPUT type="radio" name="19" value="0">Нет
    <P>  20 Надоедает ли Вам делать лабораторные по PHP?
        <INPUT type="radio" name="20" value="1" checked>Да <INPUT type="radio" name="20" value="0">Нет
    <P> <INPUT type="submit" name="click" value="Отправить">
</FORM>
<?
if (isset($_POST["click"])) {
    $point=0;
    $plusPoint=array(0,0,1,0,0,
                     0,0,0,1,1,
                     0,0,1,1,0,
                     0,0,0,1,0);
    for($i=1;$i<=20;$i++) {
        if($_POST["$i"]==$plusPoint[$i-1]||$_POST["$i"]==$plusPoint[$i-1]) {
            $point++;
        }
    }
    echo("Ваши баллы: $point<br>");
    if  ($point>15) {
        echo("У вас покладистый характер");
    } else if ($point>=8) {
        echo("Вы не лишены недостатков, но с вами можно ладить");
    } else {
        echo("Вашим друзьям можно посочувствовать");
    }
}
?>
</BODY>
</HTML>



















