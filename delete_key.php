<?php
$servername = "localhost";
$username = "f0481741";
$password= "rukiunevni";
 $dbname ="f0481741_users";
 mysqli_connect($servername, $username, $password, $dbname) or die ("Невозможно
подключиться к серверу");

  $link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link)); 
$query ="DELETE FROM digital_keys WHERE id_key=" . $_GET['id_key'];
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
header("Location: index.php");
 exit;
?>