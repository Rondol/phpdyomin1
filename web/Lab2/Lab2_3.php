<HTML>
<head>
<TITLE>Дёмин Роман</TITLE>
</head>
<BODY>
<?php
$cust = array("cnum" => "2001",
             "cname"=> "Hoffman",
             "city"=> "London",
             "snum"=> "1001",);

print("Ассоциативный массив cust:<br>");
foreach ($cust as $key => $value) {
    print ("$key = $value <br>");
}

$cust["rating"] = "100";
print("<br>Ассоциативный массив cust с новый значением:<br>");
foreach ($cust as $key => $value) {
    print ("$key = $value <br>");
}

asort($cust);
print("<br>Ассоциативный отсортированный массив cust:<br>");
foreach ($cust as $key => $value) {
    print ("$key = $value <br>");
}

ksort($cust);
print("<br>Ассоциативный отсортированный по ключам массив cust:<br>");
foreach ($cust as $key => $value) {
    print ("$key = $value <br>");
}

sort($cust);
print("<br>Ассоциативный отсортированный массив без сохранения индексов cust:<br>");
foreach ($cust as $key => $value) {
    print ("$key = $value <br>");
}
?>
</BODY>
</HTML>