<head>
    <title>
        "Web - программирование" - Работа 9
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <h2>Добавленная информация</h2>
    <?php
    @$fp = fopen('info.txt', 'rb');
    if (!$fp) {
        echo "<p>Нет информации о студентах. Пожалуйста, попытайтесь позже.";
        echo "<p><a href='form.php'>Добавить информацию о студенте</a>";
        echo "<p><a href='../index.php'>К содержанию</a>";
        exit;
    }
    while (!feof($fp)) {
        $student = fgets($fp, 999);
        echo '<br>' . $student;
    }
    fclose($fp);
    ?>
    <p><a href='form.php'>Добавить информацию о студенте</a>
    <p><a href='../index.php'>К содержанию</a>
</body>

</html>