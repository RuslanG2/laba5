<?php
$servername = "localhost";
$username = "f0481741";
$password= "rukiunevni";
 $dbname ="f0481741_users";
 mysqli_connect($servername, $username, $password, $dbname) or die ("Невозможно
подключиться к серверу");

  $link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link)); 
	
	
$query2 ="DELETE FROM digital_keys WHERE user_id=" . $_GET['id_user'];
$result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link)); 
	
$query ="DELETE FROM os WHERE id_user=" . $_GET['id_user'];
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
header("Location: index.php");
 exit;
?>