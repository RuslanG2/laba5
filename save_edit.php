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
$query ="UPDATE os SET name='". $_GET['name'].
 "', type='".$_GET['type']."', bit='"
.$_GET['bit']."', admin='".$_GET['admin'].
"', kolvo='".$_GET['kolvo']. "'WHERE id_user="
.$_GET['id'];
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 


 
 

 if (mysqli_affected_rows($link)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
ОС </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку ОС</a> '; }
?>
</body> </html>