<html>

<head>
    <title>"Web-программирование" (Дудырин Д. В.) - Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах (база данных)</h1>
    <h2>Удаление студента</h2>
    <?php
    $id = $_REQUEST['id'];
    $handle = new mysqli('StudyPHPDudyrin', 'root', '', 'students');
    $query = "DELETE FROM student WHERE id=$id";
    $result = $handle->query($query);
    if ($result) echo "Данные удалены";
    if (!$result) echo "Ошибка удаления данных";
    echo "<p><a href='index.php'>Добавленные студенты</a>";
    ?>
</body>

</html>