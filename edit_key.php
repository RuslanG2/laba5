<html>
<head
<title> Редактирование данных о магазине </title><style>
   body {
    background: #B0C4DE; /* Цвет фона */
    
   }
  </style>
</head>
<body>
<?php

$servername = "localhost";
$username = "f0481741";
$password= "rukiunevni";
 $dbname ="f0481741_users";

 mysqli_connect($servername, $username, $password, $dbname) or die ("Невозможно
подключиться к серверу");

  $link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link)); 
	$a=$_GET['id_key'];
	
	
$query ="SELECT * FROM digital_keys WHERE id_key=".$a; 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
 


 while ($st = mysqli_fetch_array($result)) {
	  $id=$_GET['id_key'];
 $date_s=$st['date_s'];
 $date_f = $st['date_f'];
 $user_id = $st['user_id'];
 $shop_id = $st['shop_id'];
  $cost = $st['cost'];
    $key = $st['key'];
 } 
 
 
 
print "<form action='save_edit_key.php' metod='get'>";
print "Дата приобретения: <input name='date_s' size='20' type='text'
value='".$date_s."'>";
print "<br>Дата окончания: <input name='date_f' size='20' type='text'
value='".$date_f."'>";

print "<br>ID OC: <select name='user_id'>";

$query ="SELECT  * FROM os";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result){    
while ($row = mysqli_fetch_array($result)) {
	if($user_id==$row["id_user"]){
echo "<option value=".$row["id_user"]." selected>". $row["id_user"] ." " .$row["name"] ."</option>";
	}else{
	echo "<option value=".$row["id_user"].">". $row["id_user"] ." " .$row["name"] ."</option>";}
}}
print "</select>";






print "<br>ID магазина <select name='shop_id'>";
$query ="SELECT  * FROM digital_shop";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result){    
while ($row = mysqli_fetch_array($result)) {
	if($shop_id==$row["id_shop"]){
	echo "<option value=".$row["id_shop"]." selected>". $row["id_shop"] ." " .$row["name_shop"] ."</option>";
	}else{
	echo "<option value=".$row["id_shop"].">". $row["id_shop"] ." " .$row["name_shop"] ."</option>";}
}}
print "</select>";



print "<br>Стоимость: <input name='cost' size='20' type='text'
value='".$cost."'>";
print "<br>Ключ <input name='key' size='20' type='text'
value='".$key."'>";

print "<input type='hidden' name='id_key' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться на главную </a>";
?>
</body>
</html>
