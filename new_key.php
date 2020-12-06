<html>
<head> <title> Добавление нового ключа </title><style>
   body {
    background: #B0C4DE; /* Цвет фона */
    
   }
  </style> </head>
<body>
<H2>Добавление нового ключа :</H2>
<form action="save_new_key.php" metod="get">
 Дата приобретения: <input name="date_s" size="20" type="date">
<br>Дата окончания: <input name="date_f" size="20" type="date">
<br>Id ОС:<?// <input name="user_id" size="20" type="text">?>


<select name="user_id">

<?
//<option value="0">Выберите ОС</option>
$servername = "localhost";
$username = "f0481741";
$password= "rukiunevni";
 $dbname ="f0481741_users";
mysqli_connect($servername, $username, $password, $dbname) or die ("Невозможно
подключиться к серверу");
$link = mysqli_connect($servername, $username, $password, $dbname) 
  or die("Ошибка " . mysqli_error($link)); 
	$query ="SELECT  * FROM os";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    
    while ($row = mysqli_fetch_array($result)) {

 echo "<option value=".$row["id_user"].">". $row["name"] ."</option>";

}}
?>
</select>
<br>Id магазина:<?// <input name="shop_id" size="20" type="text">?>
<select name="shop_id">

<?php 
//<option value="0">Выберите магазин</option>
$query ="SELECT  * FROM digital_shop";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    
    while ($row = mysqli_fetch_array($result)) {

 echo "<option value=".$row["id_shop"].">". $row["name_shop"] ."</option>";

}}
	
?>
</select>

<br>Стоимость: <input name="cost" size="20" type="text">
<br>Ключ: <input name="key_name" size="20" type="text">


<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться на главную </a>
</body>
</html>


