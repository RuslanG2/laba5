<html>
<head> <title> Добавление новой ОС </title><style>
   body {
    background: #B0C4DE; /* Цвет фона */
    
   }
  </style> </head>
<body>
<H2>Регистрация ОС:</H2>
<form action="save_new.php" metod="get">
 Название: <input name="name" size="20" type="text">
<br>Тип оборудования: <input name="type" size="20" type="text">
<br>Разрядность: <input name="bit" size="3" type="text">
<br>Разработчик: <input name="admin" size="20" type="text">
<br>Кол-во пользователей: <input name="kolvo" size="11" type="text">

<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку ОС </a>
</body>
</html>
