<html>
<head>
    <title>Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>
<body>
    <h1>Студенты (база данных)</h1>
    <h2>Добавленные студенты</h2>
    <?php
    $handle = new mysqli('StudyPHPDudyrin', 'root', '', 'students');
    $query = "SELECT id, gr, fio, date_format(bdate,'%d.%m.%Y') as bdate, gender, zachnum, passport 
         FROM student
         ORDER BY bdate DESC";
    $result = $handle->query($query);
    $numresult = $result->num_rows;
    echo '<p>Количество записей - ' . $numresult;
    echo '<table border=1>';
    echo '<tr><th>№</th>';
    echo '<th>Группа</th>';
    echo '<th>ФИО</th>';
    echo '<th>Дата рождения</th>';
    echo '<th>Пол</th>';
    echo '<th>Номер зачетки</th>';
    echo '<th>Паспортные данные</th>';
    echo '<th></th>';
    echo '<th></th>';

    for ($i = 0; $i < $numresult; $i++) {
        $row = $result->fetch_assoc();
        echo '<tr><td>' . $row['id'];
        echo '</td><td>' . $row['gr'];
        echo '</td><td>' . $row['fio'];
        echo '</td><td>' . $row['bdate'];
        echo '</td><td>' . $row['gender'];
        echo '</td><td>' . $row['zachnum'];
        echo '</td><td>' . $row['passport'];
        echo '</td><td>';
        echo '<form action="delstudent.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<input type="submit" value="Удалить">';
        echo '</form>';
        echo '</td><td>';
        echo '<form action="studentformedit.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<input type="submit" value="Изменить">';
        echo '</form>';
    }
    echo '</table>'
    ?>
    <p><a href='studentformadd.php'>Добавить студента</a>
    <p><a href='../index.php'>К содержанию</a>
</body>
</html>