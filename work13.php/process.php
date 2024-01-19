<html>

<head>
    <title>"Web-программирование" - Работа 13
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Обработка информации</h1>

    <?php
    if (isset($_POST)) {
        $_SESSION = $_POST;
    }
    if (isset($_SESSION)) {
        $fl = fopen('directory/text.txt', 'w');
        if ($fl) {
            foreach ($_SESSION as $value) {
                fwrite($fl, $value);
                fwrite($fl, PHP_EOL);
            }
            fwrite($fl, $_FILES['upfile']['name']);
            fclose($fl);

            if (move_uploaded_file($_FILES['upfile']['tmp_name'], 'directory/' . $_FILES['upfile']['name'])) {
                echo 'Информация успешно загружена';
            } else {
                echo 'Ошибка';
            }
        }
    }
    ?>
    <p><a href='index.php'>Просмотр информации</a>

</body>

</html>