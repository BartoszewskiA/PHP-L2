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
        $dane = fread($plik, filesize("baza.txt"));
        $tablica = explode(';', $dane);
        //print_r($tablica);
        fclose($plik);
            $poz = 0;
            while($poz < count($tablica) && !empty($tablica[$poz]))
            {

                $tytul = $tablica[$poz++];
                $tresc = $tablica[$poz++];
                $podpis =$tablica[$poz++];
                
                echo "<article>";
                echo "<header><b>$tytul</b></header>";
                echo "<main><pre>$tresc</pre></main>";
                echo "<footer>$podpis</footer>";
                echo "</arcicle>";
                echo "<hr>";
            }

    }
    ?>
</body>

</html>