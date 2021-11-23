<?php
$inputString=$_POST["inputString"];
$a=$_POST["a"];
$b=$_POST["b"];
echo (str_replace($a.$b,$b,$inputString));
?>