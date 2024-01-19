<html>

<head>
    <title>"Web-программирование" - Работа 9
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <h2>Результаты обработки</h2>
    <?php
    $group = $_POST['group'];
    $fio = $_POST['fio'];
    $bdate = $_POST['bdate'];
    $gender = $_POST['gender'];
    $№ = $_POST['№'];
    $pasport = $_POST['pasport'];
    $date = date('H:i, d.m.Y');
    echo '<p>Информация обработана в ';
    echo $date;
    echo '</p>';
    echo '<p>Информация о студенте: </p>';
    $outputstring = $date . "\n" . $group . " группа\n" . "ФИО - " . $fio .
        "\n" . "Дата рождения - " . $bdate . "\nПол - " . $gender . " \n№ зачетки - " . $№ . "\nПаспорт - " . $pasport . "\n";
    echo "<p> $outputstring   ";
    @$fp = fopen("info.txt", 'ab');
    if (!$fp) {
        echo "<p><strong>В настоящий момент ваш запрос не
может быть обработан. "
            . "Пожалуйста, попытайтесь позже.</strong></p>" .
            "<p><a href='index.php'>Просмотр заказов</a></body></html>";
        exit;
    }
    $outputstring = $outputstring . "_____________________________________________________\n";
    fwrite($fp, $outputstring, strlen($outputstring));
    fclose($fp);
    echo '<p>Информация записана.</p>';
    ?>
    <p><a href='index.php'>Просмотр информации</a>
</body>

</html>