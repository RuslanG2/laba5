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
	$a=$_GET['id_shop'];
	
	
$query ="SELECT * FROM digital_shop WHERE id_shop=".$a; 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
 


 while ($st = mysqli_fetch_array($result)) {
 $id=$_GET['id_shop'];
 $name = $st['name_shop'];
 $url = $st['url'];

 } 
print "<form action='save_edit_shop.php' metod='get'>";
print "Название: <input name='name_shop' size='20' type='text'
value='".$name."'>";
print "<br>URL: <input name='url' size='20' type='text'
value='".$url."'>";



print "<input type='hidden' name='id_shop' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться на главную </a>";
?>
</body>
</html>
