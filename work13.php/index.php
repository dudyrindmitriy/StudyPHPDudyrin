<head>
    <title>"Web-программирование" - Работа 13</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <?php
    $arr;
    $index = 0;
    $fl = fopen('directory/text.txt', 'r');
    if ($fl) {
        while (!feof($fl)) {
            $arr[$index] = fgets($fl);
            $index++;
        }
    }
    ?>
    <ul>
        <li>Имя: <?php echo $arr[0] ?></li>
        <li>Возраст: <?php echo $arr[1] ?></li>
        <li>Зарплата: <?php echo $arr[2] ?></li>
        <li>Фото: <img src="directory/<?php echo $arr[3] ?>" alt="" width="400" height="500"></li>
    </ul>
    <p><a href='form.php'>К форме</a>
    <p><a href='../index.php'>К содержанию</a>

</body>

</html>