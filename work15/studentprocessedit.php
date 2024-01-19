<html>

<head>
    <title>Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах (база данных)</h1>
    <h2>Результаты изменения информации</h2>
    <?php
    $id=$_REQUEST['id'];
    $gr = $_REQUEST['gr'];
    $fio = $_REQUEST['fio'];
    $bdate = $_REQUEST['bdate'];
    $gender = $_REQUEST['gender'];
    $zachnum = $_REQUEST['zachnum'];
    $passport = $_REQUEST['passport'];
    if ((!isset($gr)) || (!$fio) || (!$bdate) || (!isset($gender)) || (!$zachnum) || (!$passport)) {
        echo '<p>Вы не указали все данные. Повторите ввод заказа.';
        echo '<p><a href="studentformadd.php">К форме заказа</a>';
        echo '</body></html>';
        exit;
    }
    $handle = new mysqli('StudyPHPDudyrin', 'root', '', 'students');
    $query = "UPDATE student SET
    gr=$gr,
    fio='$fio',
    bdate='$bdate',
    gender='$gender',
    zachnum='$zachnum',
    passport='$passport'

 WHERE id=$id";
    $result = $handle->query($query);
    if ($result) echo "Данные сохранены";
    if (!$result) echo "Ошибка сохранения данных";
    echo "<p><a href='index.php'>Добавленные студенты</a>";
    ?>
</body>

</html>