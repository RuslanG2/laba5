<?php

$servername = "localhost";
$username = "f0481741";
$password= "rukiunevni";
 $dbname ="f0481741_users";
$link = mysqli_connect($servername, $username, $password, $dbname);

$query2 ="SELECT os.name, os.type, os.bit, os.admin, os.kolvo, digital_keys.key, DATE_FORMAT( digital_keys.date_s, '%d.%m.%Y' ) AS date_s,  DATE_FORMAT( digital_keys.date_f, '%d.%m.%Y' ) AS date_f, digital_shop.url
FROM os INNER JOIN digital_keys
ON os.id_user=digital_keys.user_id
JOIN digital_shop
ON digital_shop.id_shop=digital_keys.shop_id";
$result = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link)); 

//$query1 = mysqli_query($link, "SELECT * FROM os");
//$myrow = mysqli_fetch_array($query1);


  require_once 'PHPExcel/Classes/PHPExcel.php';

  $phpexcel = new PHPExcel(); 
  $page = $phpexcel->setActiveSheetIndex(0); 
   
  $page->setCellValue("A1", "Название"); 
  $page->setCellValue("B1", "Тип оборудования");
  $page->setCellValue("C1", "Разрядность");
  $page->setCellValue("D1", "Разработчик");   
  $page->setCellValue("E1", "Кол-во пользователей");  
	$page->setCellValue("F1", "Ключ");
  $page->setCellValue("G1", "Дата приобретения");   
  $page->setCellValue("H1", "Дата окончания");  
  $page->setCellValue("I1", "URL");  


$s = 2;
if($result){
while($row=mysqli_fetch_array($result))
{

  $page->setCellValue("A$s", $row['name']); 
  $page->setCellValue("B$s", $row['type']);
  $page->setCellValue("C$s", $row['bit']);
  $page->setCellValue("D$s", $row['admin']);   
  $page->setCellValue("E$s", $row['kolvo']);  
  $page->setCellValue("F$s", $row['key']);  
  $page->setCellValue("G$s", $row['date_s']);   
  $page->setCellValue("H$s", $row['date_f']);  
  $page->setCellValue("I$s", $row['url']);  
  $s++;
} }
  $page->setTitle("Example"); 


$objWriter = PHPExcel_IOFactory::createWriter($phpexcel, 'Excel2007');
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="OS_table.xlsx"');

$objWriter->save('php://output');

exit;
?>
<HTML><head> <title> Скачивание </title> <style>
   body {
    background: #B0C4DE; /* Цвет фона */
    
   }
  </style> </head><BODY>
<a href="http://f0481741.xsph.ru/bduser2/OS_table.xlsx" download="OS_table.xlsx">Скачать сфоримированную таблицу</a>

</BODY>
</HTML>