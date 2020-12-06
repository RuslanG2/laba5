<html>
<head> <title> Добавление нового магазина </title><style>
   body {
    background: #B0C4DE; /* Цвет фона */
    
   }
  </style> </head>
<body>

<?php
 // Подключение к базе данных:
$servername = "localhost";
$username = "f0481741";
$password= "rukiunevni";
 $dbname ="f0481741_users";

 mysqli_connect($servername, $username, $password, $dbname) or die ("Невозможно
подключиться к серверу");

  $link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link)); 

$query="INSERT INTO digital_keys (
`id_key` ,
`date_s` ,
`date_f` ,
`user_id` ,
`shop_id` ,
`cost` ,
`key`
)
VALUES (
NULL , '" . $_GET['date_s'].
 "', '".$_GET['date_f']."', '".$_GET['user_id']."', '".$_GET['shop_id']."', '".$_GET['cost']."', '".$_GET['key_name']."')";
	
/*$query ="INSERT INTO digital_keys SET date_s='" . $_GET['date_s'].
 "', date_f='".$_GET['date_f']."', user_id='".$_GET['user_id']."', shop_id='".$_GET['shop_id']."', cost='".$_GET['cost']."', key='".$_GET['key_name']."'";
*/
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
 

 
 if (mysqli_affected_rows($link)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, ваш ключ зарегистрирован в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться на главную </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться на главную </a>"; }
?>

</body>
</html>

