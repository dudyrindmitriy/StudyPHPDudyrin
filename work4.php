<html>

<head>
    <title>
        "Web-программирование" (Дудырин Д.В.) - Работа 4
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" char-set='utf-8'>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a>";
    $num = 15;
    if ($num >= 10 and $num <= 20) {
        echo '<p>+++';
    } else {
        echo '<p>---';
    }
    $test = true;
    if (!$test) {
        echo '<p>+++';
    } else {
        echo '<p>---';
    }
    $day = 15;
    if ($day >= 1 and $day <= 10) {
        echo '<p>Первая декада месяца';
    } elseif ($day > 10 and $day <= 20) {
        echo '<p>Вторая декада месяца';
    } elseif ($day > 20 and $day <= 31) {
        echo '<p>Третья декада месяца';
    } else {
        echo '<p>Ошибка';
    }
    $lang = 'ru';
    switch ($lang) {
        case 'ru':
            echo '<p>рус';
            break;
        case 'en':
            echo '<p>анг';
            break;
        case 'de':
            echo '<p>нем';
            break;
        default:
            echo '<p>язык не поддерживается';
            break;
    }
    $res = $num >= 0 ? 1 : -1;
    echo "<p>$res";
    ?>
</body>

</html>