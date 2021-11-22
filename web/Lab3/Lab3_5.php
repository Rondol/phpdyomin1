
<meta charset="utf-8">
<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<p>ДОДЕЛАЙ:</p>
<FORM method="post" action="<?php print $_SERVER['PHP_SELF'] ?>">
    Введите ваше имя: <INPUT type="Ваше имя" name="login" size="3">
    <P> <INPUT type="radio" name="1" value="1"> 1 Считаете ли Вы, что у многих ваших знакомых хороший характер?
    <P> <INPUT type="radio" name="2" value="1"> 2 Раздражают ли Вас мелкие повседневные обязанности?
    <P> <INPUT type="radio" name="3" value="1"> 3 Верите ли Вы, что ваши друзья преданы Вам?
    <P> <INPUT type="radio" name="4" value="1"> 4 Неприятно ли Вам, когда незнакомый человек делает Вам замечание?
    <P> <INPUT type="radio" name="5" value="1"> 5 Способны ли Вы ударить собаку или кошку?
    <P> <INPUT type="radio" name="6" value="1"> 6 Часто ли Вы принимаете лекарства?
    <P> <INPUT type="radio" name="7" value="1"> 7 Часто ли Вы меняете магазин, в который ходите за продуктами?
    <P> <INPUT type="radio" name="8" value="1"> 8 Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?
    <P> <INPUT type="radio" name="9" value="1"> 9 Тяготят ли Вас общественные обязанности?
    <P> <INPUT type="radio" name="10" value="1"> 10 Способны ли Вы ждать более 5 минут, не проявляя беспокойства?
    <P> <INPUT type="radio" name="11" value="1"> 11 Часто ли Вам приходят в голову мысли о Вашей невезучести?
    <P> <INPUT type="radio" name="12" value="1"> 12 Сохранилась ли у Вас фигура по сравнению с прошлым?
    <P> <INPUT type="radio" name="13" value="1"> 13 Можете ли Вы с улыбкой воспринимать подтрунивание друзей?
    <P> <INPUT type="radio" name="14" value="1"> 14 Нравится ли Вам семейная жизнь?
    <P> <INPUT type="radio" name="15" value="1"> 15 Злопамятны ли Вы?
    <P> <INPUT type="radio" name="16" value="1"> 16 Находите ли Вы, что стоит погода, типичная для данного времени года?
    <P> <INPUT type="radio" name="17" value="1"> 17 Случается ли Вам с утра быть в плохом настроении?
    <P> <INPUT type="radio" name="18" value="1"> 18 Раздражает ли Вас современная живопись?
    <P> <INPUT type="radio" name="19" value="1"> 19 Надоедает ли Вам присутствие чужих детей в доме более одного часа?
    <P> <INPUT type="radio" name="20" value="1"> 20 Надоедает ли Вам делать лабораторные по PHP?
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
        if(isset($_POST["$i"])&&$plusPoint[$i-1]==1||!isset($_POST["$i"])&&$plusPoint[$i-1]==0) {
            $point++;
        }
    }
    echo("Ваши баллы: $point");
}
?>
</BODY>
</HTML>



















