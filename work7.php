<html>

<head>
    <title>
        "Web-программирование" (Дудырин Д.В.) - Работа 7
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" char-set='utf-8'>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a>";
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $res = 0;
    foreach ($arr as $value) {
        $res += $value;
    }
    echo '<p>Среднее арифметическое массива ';
    print_r($arr);
    echo ' - ' . $res / count($arr) . '<p>';
    $wdays = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    foreach ($wdays as $key => $value) {
        if ($key == date('w')) {
            $day = $value;
            echo "<i> $day </i><p>";
        }
    }
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $i;
        }
    }
    for ($i = 1; $i <= 99; $i++) {
        if ($i % 2 != 0) {
            $arr100[] = $i;
        }
    }
    echo '<p>';
    print_r($arr100);
    ?>
</body>

</html>