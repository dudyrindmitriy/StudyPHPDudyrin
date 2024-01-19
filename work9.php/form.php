<html>

<head>
  <title>"Web-программирование" - Работа 8
  </title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
  <h1>Информация о студентах</h1>
  <h2>Форма</h2>
  <form action="processing.php" method=post>
    <table border=0>
      <tr bgcolor=#cccccc>
        <td width=150>Поле
        <td width=15>Данные
      <tr>
        <td>Учебная группа
        <td align=left><select class="form" name="group">
            <? @$fp = fopen('group.txt', 'rb');
            while (!feof($fp)) {
              $student[] = fgets($fp, 999);
            }
            fclose($fp);
            foreach ($student as $value) {
              echo '<option value="' . trim($value) . '">' . trim($value) . '</option>';
            }
            ?>
      <tr>
        <td>ФИО
        <td align=left><input type="text" name="fio" size=50 maxlength=50>
      <tr>
        <td>Дата рождения
        <td align=left><input type="text" name="bdate" size=10 maxlength=10 placeholder="**.**.****">
      <tr>
        <td>Пол
        <td align=left><select class="form" name="gender">
            <option value="Мужской">Мужской</option>
            <option value="Женский">Женский</option>
          </select>
      <tr>
        <td>№ зачетки
        <td align=left><input type="text" name="№" size=6 maxlength=6 placeholder="******">
      <tr>
        <td>Паспортные данные
        <td align=left><input type="text" name="pasport" size=11 maxlength=11 placeholder="**** ******">
      <tr>
        <td colspan=2 align=left><input type=submit value="Добавить">
    </table>
  </form>
  <p><a href='index.php'>Просмотр информации</a>
</body>

</html>