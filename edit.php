<html>
<head
<title> Редактирование данных о ОС </title><style>
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
	$a=$_GET['id_user'];
	
	
$query ="SELECT * FROM os WHERE id_user=".$a; 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
 

    
    //while ($row = mysqli_fetch_array($result)) {
/*
 $rows=mysql_query("SELECT name, type,
bit, admin, kolvo FROM os WHERE
id_user=".$_GET['id_user']); 

  while ($row = mysqli_fetch_array($result)) {
		
		
		echo "<tr>";

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
*/


 while ($st = mysqli_fetch_array($result)) {
 $id=$_GET['id_user'];
 $name = $st['name'];
 $type = $st['type'];
 $bit = $st['bit'];
 $admin = $st['admin'];
 $kolvo = $st['kolvo'];
 } 
print "<form action='save_edit.php' metod='get'>";
print "Название: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>Тип оборудования: <input name='type' size='20' type='text'
value='".$type."'>";
print "<br>Разрядность: <input name='bit' size='3' type='text'
value='".$bit."'>";
print "<br>Разработчик: <input name='admin' size='20' type='text'
value='".$admin."'>";
print "<br>Кол-во пользователей: <input name='kolvo' size='11' type='text'
value='".$kolvo."'>";


print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
	ОС </a>";
?>
</body>
</html>
