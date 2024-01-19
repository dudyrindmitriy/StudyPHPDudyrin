<html>

<head>
  <title>"Web-программирование" - Работа 13
  </title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
  <h1>Форма</h1>
  <?php
  session_start();
  ?>
  <form enctype="multipart/form-data" action="process.php" method="POST">
    <p><input type="text" placeholder="Имя" name="name" ></p>
    <p><input type="text" placeholder="Возраст" name="age" ></p>
    <p><input type="text" placeholder="Зарплата" name="salary" ></p>
    <p><input name="upfile" type="file" /></p>
    <p><input type="submit" value="Загрузить" /></p>
</form>
<a href="process.php"></a>
</body>

</html>