<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$mysqli = new mysqli("localhost", "root") or die ("Невозможно подключиться к серверу");
$mysqli->query('SET NAMES utf-8'); // тип кодировки
 // подключение к базе данных:
$mysqli->select_db("labainet") or die("Нет такой таблицы!");
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

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->fromArray(
    $header,
    NULL,
    'A1'
);
$sheet->fromArray(
    $data,
    NULL,
    'A2'
);
$writer = new Xlsx($spreadsheet);
$writer->save('doc.xlsx');
header("Location:  savefile.php?filename=doc.xlsx");
?>