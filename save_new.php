<html>
<head> <title> Добавление новой ОС </title><style>
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
$query ="INSERT INTO os SET name='" . $_GET['name'].
 "', type='".$_GET['type']."', bit='"
.$_GET['bit']."', admin='".$_GET['admin'].
"', kolvo='".$_GET['kolvo']. "'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
 

 
 if (mysqli_affected_rows($link)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, ваша зарегистрирована в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться к списку
ОС </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку ОС </a>"; }
?>

</body>
</html>

