<html>
<head> <title> Добавление нового магазина </title><style>
   body {
    background: #B0C4DE; /* Цвет фона */
    
   }
  </style> </head>
<body>
<H2>Добавление нового магазина :</H2>
<form action="save_new_shop.php" metod="get">
 Название: <input name="name_shop" size="20" type="text">
<br>url: <input name="url" size="20" type="text">


<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться на главную </a>
</body>
</html>
