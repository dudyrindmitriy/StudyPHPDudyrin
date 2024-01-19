<html>

<head>
    <title>
        "Web-программирование" (Дудырин Д.В.) - Работа 3
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" char-set='utf-8'>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a>";
    $arr1 = [2, 5, 3, 9];
    $res = ($arr1[0] * $arr1[1]) + ($arr1[2] * $arr1[3]);
    echo "<p>($arr1[0]*$arr1[1])+($arr1[2]*$arr1[3])=" . $res;
    $arr2 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
    echo '<p>Количество элементов в массиве - ' . count($arr2);
    $arr3 = ['a' => 1, 'b' => 2, 'c' => 3];
    $arr3['a'] = 11;
    $arr3['b'] = 21;
    $arr3['c'] = 31;
    echo '<p>';
    print_r($arr3);
    $arr4 = ['a' => 1, 'b' => 2, 'c' => 3];
    $arr4['a'] += 3;
    $arr4['b'] += 3;
    $arr4['c'] += 3;
    echo '<p>';
    print_r($arr4);
    $arr5 = [];
    $arr5['year'] = 2023;
    $arr5['month'] = 11;
    $arr5['day'] = 1;
    echo '<p>';
    print_r($arr5);
    ?>
</body>

</html>