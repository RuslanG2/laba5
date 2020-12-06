<html> <style>
   body {
    background: #B0C4DE; /* Цвет фона */
    
   }
  </style><body>
<?php
$servername = "localhost";
$username = "f0481741";
$password= "rukiunevni";
 $dbname ="f0481741_users";

 mysqli_connect($servername, $username, $password, $dbname) or die ("Невозможно
подключиться к серверу");

  $link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link));


$query="UPDATE `digital_keys` SET date_s='". $_GET['date_s'].
 "', date_f='".$_GET['date_f']."', user_id='".$_GET['user_id']."', shop_id='".$_GET['shop_id'].
 "', `cost` = '".$_GET['cost']."',
`key` = '".$_GET['key']."' WHERE `id_key` =".$_GET['id_key'];

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 


 
 

 if (mysqli_affected_rows($link)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться на главную </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться на главную</a> '; }
?>
</body> </html>