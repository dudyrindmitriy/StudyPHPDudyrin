<html>

<head>
    <title>
        "Web-программирование" (Дудырин Д.В.) - Работа 5
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" char-set='utf-8'>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a>";
    $res = time() - mktime(13, 12, 59, 3, 15, 2000);
    echo "<p>Количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени - $res секунд";
    $wdays = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    echo '<p>День недели - ' . $wdays[date('w')];
    echo '<p>День недели 06.06.2006 - ' . $wdays[date('w', mktime(1, 1, 1, 6, 6, 2006))];
    echo '<p>День недели в мой день рождения - ' . $wdays[date('w', mktime(1, 1, 1, 11, 11, 2004))];
    echo '<p>Дней до нового года - ' . ceil((strtotime(date('Y+1') . '-01-01') - time()) / (60 * 60 * 24));
    ?>
</body>

</html>