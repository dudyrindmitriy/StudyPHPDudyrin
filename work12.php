<html>
<form action="" method="POST">
    <select name="day">
        <?php for ($i = 1; $i <= 31; $i++) : ?>
            <option value="<?= $i ?>" <?php if ($i == date('d')) echo 'selected'; ?>><?= $i ?></option>>
        <?php endfor ?>
    </select>
    <select type="select" name="mon">
        <?php
        $months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
        for ($i = 1; $i <= 12; $i++) : ?>
            <option value="<?= $i ?>" <?php if ($i == date('m')) echo 'selected'; ?>><?= $months[$i - 1] ?></option>>
        <?php endfor ?>
    </select>
    <select type="select" name="year">
        <?php for ($i = 1990; $i <= 2025; $i++) : ?>
            <option value="<?= $i ?>" <?php if ($i == date('Y')) echo 'selected'; ?>><?= $i ?></option>>
        <?php endfor ?>
    </select>
    <input type="submit" name='send'>
</form>
<?php
if (isset($_POST['send'])) {
    $day = $_POST['day'];
    $mon = $_POST['mon'];
    $year = $_POST['year'];
    $wdays = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    echo '<p>День недели - ' . $wdays[date('w', mktime(1, 1, 1, $mon, $day, $year))];
}
?>

</html>