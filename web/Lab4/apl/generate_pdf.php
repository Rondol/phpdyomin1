<?php
require "../login.php";
checkLogin($_SERVER['REQUEST_URI'], false);

require_once('fpdf.php');
require "../bd.php";

class PDF extends FPDF
{
// Simple table
function BasicTable($header, $data)
{
    // Header
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}
}

$mysqli = new mysqli("localhost", $dbLogin, $dbPassword) or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db($dbName) or die("Нет такой таблицы!");
$aplRes=$mysqli->query("SELECT id, id_lang, id_dev, ver, name FROM apl");
$header = array('id', 'name', 'ver', 'developer', 'city', 'execType', 'compType');
$data=array();
while ($row=$aplRes->fetch_array()){// для каждой строки из запроса
$dev=$mysqli->query("SELECT name, city FROM developer WHERE id=".$row['id_dev']);
$dev=$dev->fetch_array();
$devName=$dev['name'];
$devCity=$dev['city'];
$lang=$mysqli->query("SELECT codeType, clientType FROM proglang WHERE id=".$row['id_lang']);
$lang=$lang->fetch_array();
$codeType=$lang['codeType'];
$clientType=$lang['clientType'];
$data[]=array($row['id'],$row['name'],$row['ver'],$devName,$devCity,$codeType,$clientType);
}
$pdf = new PDF("L");
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->BasicTable($header,$data);
$pdf->Output("D","doc.pdf");
?>