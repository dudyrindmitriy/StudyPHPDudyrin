<html>

<head>
    <title>"Web-программирование" (Дудырин Д. В.) - Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах (база данных)</h1>
    <p><a href='index.php'>Добавленные студенты</a>
    <h2>Изменение информации о студенте</h2>
    <form action="studentprocessedit.php" method=post>
        <table border=0>
            <tr bgcolor=#cccccc>
                <td width=150>Поле
                <td width=15>Значение
                    <?php
                    $id = $_REQUEST['id'];
                    echo '<input type="hidden" name="id" value="' . $id . '">';
                    $handle = new mysqli('StudyPHPDudyrin', 'root', '', 'students');
                    $query = "SELECT id, gr, fio, date_format(bdate,'%d.%m.%Y %H:%i') bdate, gender, zachnum, passport
                        FROM student
                        WHERE id=$id";
                    $result = $handle->query($query);
                    $row = $result->fetch_assoc();

                    ?>
            <tr>
                <td>Группа
                <td align=left><select name="gr" id="">
                        <?
                        $handle = new mysqli('StudyPHPDudyrin', 'root', '', 'students');
                        $query = "SELECT * FROM gruppi";
                        $result = $handle->query($query);
                        $kol = $result->num_rows;
                        for ($i = 1; $i <= $kol; $i++) {
                            echo '<option value="';
                            $query = "SELECT gr1 FROM gruppi WHERE id=$i";
                            $result = $handle->query($query);
                            $row1 = $result->fetch_assoc();
                            $group_number = $row1['gr1'];
                            if ($group_number == $row['gr']) echo $group_number . '" selected="selected">' . $group_number;
                            else echo $group_number . '">' . $group_number;
                        }
                        ?>
                        <? @$fp = fopen('groups.txt', 'rb');
                        while (!feof($fp)) {
                            $student[] = fgets($fp, 999);
                        }
                        fclose($fp);
                        foreach ($student as $value) {
                            if (trim($value) == trim($row['gr'])) {
                                echo '<option value="' . trim($value) . '" selected="selected">' . trim($value) . '</option>';
                            } else {
                                echo '<option value="' . trim($value) . '">' . trim($value) . '</option>';
                            }
                        }
                        ?>
                    </select>
            <tr>
                <td>ФИО
                <td align=left><input type="text" name="fio" size=50 maxlength=50 value='<?php echo $row['fio'] ?>'>
            <tr>
                <td>Дата рождения
                <td align=left><input type="date" name="bdate" value='<?php echo date('Y-m-d', strtotime($row['bdate'])); ?>'>
            <tr>
                <td>Пол
                <td align=left><select name="gender" id="">
                        <option value="мужской" <?php if ($row['gender'] == 'мужской') echo 'selected' ?>>мужской</option>
                        <option value="женский" <?php if ($row['gender'] == 'женский') echo 'selected' ?>>женский</option>
                    </select>
            <tr>
                <td>Номер зачетки
                <td align=left><input type="text" name="zachnum" size=6 maxlength=6 value='<?php echo $row['zachnum'] ?> '>
            <tr>
                <td>Паспортные данные
                <td align=left><input type="text" name="passport" size=11 maxlength=11 value='<?php echo $row['passport'] ?> '>

            <tr>
                <td colspan=2 align=center><input type=submit value="Изменить информацию"></td>
            </tr>
        </table>
    </form>
</body>

</html>