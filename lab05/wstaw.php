<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_POST["tytul"]) || !isset($_POST['post']) || !isset($_POST['autor'])) {
        echo "<p>Wysłanie postu nieudane</p>";
        return;
    }
    $tytul = $_POST['tytul'];
    $tresc = $_POST['post'];
    $autor = $_POST['autor'];

    $plik = fopen("baza.txt", "a");
    fwrite($plik, $tytul);
    fwrite($plik, ';');
    fwrite($plik, $tresc);
    fwrite($plik, ';');
    fwrite($plik, $autor);
    fwrite($plik, ';');

    fclose($plik);
    unset($plik);

    echo "<p>Dziękujemy, Twój post został opublikowany</p>";
    echo "<a href=\"panel_adm.html\">Powrót do strony głownej</a>";
    ?>
</body>

</html>