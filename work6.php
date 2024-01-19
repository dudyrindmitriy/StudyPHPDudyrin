<html>

<head>
    <title>
        "Web-программирование" (Дудырин Д.В.) - Работа 6
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" char-set='utf-8'>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a>";
    function sumOfDigits($num)
    {
        return array_sum(str_split($num, 1));
    }
    echo '<p>' . sumOfDigits(12345);
    $months = [1 => 'января', 2 => 'февраля', 3 => 'марта', 4 => 'апреля', 5 => 'мая', 6 => 'июня', 7 => 'июля', 8 => 'августа', 9 => 'сентября', 10 => 'октября', 11 => 'ноября', 12 => 'декабря'];
    function convertDate($date)
    {
        global $months;
        $m = $months[date('m', strtotime($date))];
        return date('j', strtotime($date)) . ' ' . $m . ' ' . date('Y', strtotime($date));
    }
    echo '<p>' . convertDate(date('Y-m-d'));
    function commonDivisors($num1, $num2)
    {
        for ($i = 1; $i <= min($num1, $num2); $i++) {
            if (($num1 % $i == 0) && ($num2 % $i == 0)) {
                $divisors[] = $i;
            }
        }

        return $divisors;
    }
    echo '<p> Общие делители для 16 и 32:<p>';
    print_r(commonDivisors(16, 32));

    ?>
</body>

</html>