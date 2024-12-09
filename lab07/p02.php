<?php
    if(isset($_POST['usun']))
        setcookie("poprzednia");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['wartosc']) && is_numeric($_GET['wartosc'])) {
        $c = $_GET['wartosc'];
        setcookie("poprzednia",$c, time()+60*60*24*30);
    } elseif (isset($_COOKIE['poprzednia'])) {
        $c = $_COOKIE['poprzednia'];
    } else {
        $c = 0;
    }
    ?>

    <?php
    echo "<form method=\"get\">";
    echo "<input type=\"number\" name=\"wartosc\" placeholder=\"Temperatura w  C\" value=\"$c\">";
    echo "<input type=\"submit\" value=\"Przelicz\">";
    echo "</form>";
    echo "<br>";

    $f = $c * 1.8 + 32;
    echo "$c C = $f F";
    ?>
    <br>
    <br>
    <form method="post">
        <input type="hidden" name="usun" />
        <input type="submit" value="Usun ciasteczko" />
    </form>

</body>

</html>