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
$query ="INSERT INTO digital_shop SET name_shop='" . $_GET['name_shop'].
 "', url='".$_GET['url']."'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
 

 
 if (mysqli_affected_rows($link)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, ваш магазин зарегистрирован в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться на главную </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться на главную </a>"; }
?>

</body>
</html>

