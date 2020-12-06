<html>
<head> <title> Операционные системы </title> <style>
   body {
    background: #B0C4DE; /* Цвет фона */
    
   }
  </style> </head>
<body>
<?php

$servername = "localhost";
$username = "f0481741";
$password= "rukiunevni";
 $dbname ="f0481741_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
die ("Невозможно подключиться к серверу" . $conn->connect_error);} // установление соединения с сервером




?>
<h2>Зарегистрированные ОС:</h2>
<table border="1">
<tr> БД Галлямова Руслана
 <th> ID ОС </th><th> Название </th> <th> Тип оборудования </th><th> Разрядность </th><th> Разработчик </th><th> Кол-во пользователей </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php


 $link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link)); 
$query ="SELECT  * FROM os";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    
    while ($row = mysqli_fetch_array($result)) {
		
		
		echo "<tr>";
echo "<td>" . $row["id_user"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
 echo "<td>" . $row['bit'] . "</td>";
 echo "<td>" . $row['admin'] . "</td>";
echo "<td>" . $row['kolvo'] . "</td>";

echo "<td><a href='edit.php?id_user=" . $row['id_user']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id_user=" . $row['id_user']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>"; 

	}
		
	
	
	
   print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего OS: $num_rows </p>");
   
}




?>
<p> <a href="new.php"> Добавить операционную систему </a>


<?php



$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
die ("Невозможно подключиться к серверу" . $conn->connect_error);} // установление соединения с сервером


?>
<h2>Цифровые магазины:</h2>
<table border="1">
<tr> БД Галлямова Руслана
 <th> ID магазина </th> <th> Название </th><th> URL </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php


 $link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link)); 
$query ="SELECT  * FROM digital_shop";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    
    while ($row = mysqli_fetch_array($result)) {
		
		
		echo "<tr>";

 echo "<td>" . $row["id_shop"] . "</td>";
  echo "<td>" . $row['name_shop'] . "</td>";
 echo "<td>" . $row['url'] . "</td>";

echo "<td><a href='edit_shop.php?id_shop=" . $row['id_shop']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_shop.php?id_shop=" . $row['id_shop']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>"; 

	}

   print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего магазинов: $num_rows </p>");
   
}

?>
<p> <a href="new_shop.php"> Добавить магазин </a>

<?php



$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
die ("Невозможно подключиться к серверу" . $conn->connect_error);} // установление соединения с сервером


?>
<h2>Цифровые ключи:</h2>
<table border="1">
<tr> БД Галлямова Руслана
 <th>ID ключа </th> <th> Дата приобретения </th><th>Дата окончания </th><th>ID ОС </th><th>ID магазина </th><th>Стоимость</th><th>Ключ </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php


 $link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link)); 
$query ="SELECT  * FROM digital_keys";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    
    while ($row = mysqli_fetch_array($result)) {
		
		
		echo "<tr>";

 echo "<td>" . $row["id_key"] . "</td>";
  echo "<td>" . $row['date_s'] . "</td>";
 echo "<td>" . $row['date_f'] . "</td>";
  echo "<td>" . $row["user_id"] . "</td>";
  echo "<td>" . $row['shop_id'] . "</td>";
 echo "<td>" . $row['cost'] . "</td>";
  echo "<td>" . $row['key'] . "</td>";
 

echo "<td><a href='edit_key.php?id_key=" . $row['id_key']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_key.php?id_key=" . $row['id_key']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
echo "</tr>"; 

	}

   print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего ключей: $num_rows </p>");
   
}

?>
<p> <a href="new_key.php"> Добавить ключ </a>


<BR><h2>Скачать таблицу:</h2>
<p> <a href="generator.php"> Сформировать exel файл </a>


</body> </html>