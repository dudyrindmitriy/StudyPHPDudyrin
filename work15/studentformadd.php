<html>

<head>
    <title>Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Студенты (база данных)</h1>
    <p><a href='index.php'>Добавленные студенты</a>
    <h2>Форма</h2>
    <form action="studentprocessadd.php" method=post>
        <table border=0>
            <tr bgcolor=#cccccc>
                <td width=150>Поле
                <td width=15>Значение
            <tr>
                <td>Номер группы
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
                            $row = $result->fetch_assoc();
                            $group_number = $row['gr1'];
                            echo $group_number . '">' . $group_number;
                        }
                        ?>
                        </option>
                    </select>
            <tr>
                <td>ФИО
                <td align=left><input type="text" name="fio" size=50 maxlength=50>
            <tr>
                <td>Дата рождения
                <td align=left><input type="date" name="bdate">
            <tr>
                <td>Пол
                <td align=left><select name="gender" id="">
                        <option value="мужской">мужской</option>
                        <option value="женский">женский</option>
                    </select>
            <tr>
                <td>Номер зачетки
                <td align=left><input type="text" name="zachnum" size=6 placeholder="******">
            <tr>
                <td>Паспортные данные
                <td align=left><input type="text" name="passport" size=11 placeholder="**** ******">
            <tr>
                <td colspan=2 align=left><input type=submit value="Добавить студента"></td>
        </table>
    </form>
</body>

</html>