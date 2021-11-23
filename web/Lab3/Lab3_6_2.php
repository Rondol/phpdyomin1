<?php
$str=explode(" ",$_POST["inputString"]);
for ($i=0;$i<count($str);$i++) {
	echo(strrev($str[$i])." ");
}
?>