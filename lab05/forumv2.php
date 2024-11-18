<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Forum</h2>
    <?php
    $plik = @fopen("baza.txt", "r");
    if (!($plik)) {
        echo "Jeszcze nie ma żadnych wpisów";
    } else {
        while (!(feof($plik))) {
            $tytul = fgets($plik);
            $tresc = fgets($plik);
            $podpis = fgets($plik);
            echo "<article>";
            echo "<header>$tytul</header>";
            echo "<main>$tresc</main>";
            echo "<footer>$podpis</footer>";
            echo "</arcicle>";
        }
        fclose($plik);
    }
    ?>
</body>

</html>