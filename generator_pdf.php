<?php


$servername = "localhost";
$username = "f0481741";
$password= "rukiunevni";
 $dbname ="f0481741_users";
$link = mysqli_connect($servername, $username, $password, $dbname);



$query2 ="SELECT os.name, os.type, os.bit, os.admin, os.kolvo, digital_keys.key, digital_keys.date_s, digital_keys.date_f, digital_shop.url
FROM os INNER JOIN digital_keys
ON os.id_user=digital_keys.user_id
JOIN digital_shop
ON digital_shop.id_shop=digital_keys.shop_id";
$result = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link)); 

define('FPDF_FONTPATH',"fpdf182/font/");
require('fpdf182/fpdf.php');


$pdf=new FPDF();
$pdf->SetTitle("OS_table");
//$pdf->AddPage();
$pdf->AddPage('P');
$pdf->SetDisplayMode(real,'default');

//$pdf->SetFont('Arial','B',10);
  $pdf->AddFont('Arial','','arial.php'); 
// устанавливаем шрифт Ариал
    $pdf->SetFont('Arial');
	  $pdf->SetFontSize(10);

$pdf->Write(0,iconv('utf-8', 'windows-1251',"БД Галлямова Руслана"));

$pdf->Ln();
$pdf->Ln();

//$pdf->SetFont('Arial','B',10);
   $pdf->SetFont('Arial');
$pdf->Cell(20,15,  iconv('utf-8', 'windows-1251',"Название"));
$pdf->Cell(15,15, iconv('utf-8', 'windows-1251',"Тип"));
$pdf->Cell(25,15, iconv('utf-8', 'windows-1251',"Разрядность"));
$pdf->Cell(30,15, iconv('utf-8', 'windows-1251',"Кол-во польз"));
$pdf->Cell(29,15, iconv('utf-8', 'windows-1251',"Ключ"));
$pdf->Cell(31,15, iconv('utf-8', 'windows-1251',"Дата приобр"));
$pdf->Cell(35,15, iconv('utf-8', 'windows-1251',"Дата окончания"));
$pdf->Cell(20,15, iconv('utf-8', 'windows-1251',"URL"));
$pdf->Ln();
$pdf->Cell(450,3,"----------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();

      
        $No = 5;
		if($result){
        while($rows=mysqli_fetch_array($result))
        {
            
            $InstituteName = $rows['name'];
            $CourseName = $rows['type'];
            $Total = $rows[2];
            $Year = $rows[3];
            $pdf->Cell(20,$No,  iconv('utf-8', 'windows-1251', $rows['name']));
			$pdf->Cell(20,$No,  iconv('utf-8', 'windows-1251', $rows['type'])); 
			$pdf->Cell(30,$No,  iconv('utf-8', 'windows-1251', $rows['bit']));
			$pdf->Cell(20,$No,  iconv('utf-8', 'windows-1251', $rows['kolvo'])); 
			$pdf->Cell(30,$No,  iconv('utf-8', 'windows-1251', $rows['key']));
			$pdf->Cell(30,$No,  iconv('utf-8', 'windows-1251', $rows['date_s'])); 
			$pdf->Cell(30,$No,  iconv('utf-8', 'windows-1251', $rows['date_f']));
			$pdf->Cell(20,$No,  iconv('utf-8', 'windows-1251', $rows['url'])); 
			$pdf->Ln();
		
        }
		}
		




$pdf->Output('OS_table.pdf', 'D'); 

	//header('Content-Disposition: attachment; filename="OS_table.pdf');
//$pdf->save('php://output');
//$pdf->Output();
//exit;
?>