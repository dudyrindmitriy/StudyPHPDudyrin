<html>
<form action="work10.php" method="GET">
    <input type="text" name="a" placeholder="Коэффициент a" value="<?php
                                                                    if (isset($_GET['a'])) echo $_GET['a'];
                                                                    ?>">
    <input type="text" name="b" placeholder="Коэффициент b" value="<?php
                                                                    if (isset($_GET['b'])) echo $_GET['b'];
                                                                    ?>">
    <input type="text" name="c" placeholder="Коэффициент c" value="<?php
                                                                    if (isset($_GET['c'])) echo $_GET['c'];
                                                                    ?>">
    <input type="submit">
</form>
<?php
if ((isset($_GET['a'])) && (isset($_GET['b'])) && (isset($_GET['c']))) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $D = $b * $b - 4 * $a * $c;
    if ($D > 0) {
        $x1 = ($b * (-1) + sqrt($D)) / (2 * $a);
        $x2 = ($b * (-1) - sqrt($D)) / (2 * $a);
        echo "x1=$x1, x2=$x2";
    } else if ($D == 0) {
        echo "x=$x1";
    } else {
        echo 'Корней нет';
    }
}

?>

</html>