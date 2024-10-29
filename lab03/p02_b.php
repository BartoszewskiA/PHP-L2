<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if(!isset($_GET["liczba"]) || $_SERVER["REQUEST_METHOD"] != "GET")
    {
        return;
    }
    $n = $_GET["liczba"];
    $tab[0] = 1;
    $tab[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        $tab[] = $tab[$i - 2] + $tab[$i - 1];
    }
    echo "<ol>";
    foreach ($tab as $liczba) {
        echo "<li>$liczba</li>";
    }
    echo "</ol>";
    ?>
</body>

</html>