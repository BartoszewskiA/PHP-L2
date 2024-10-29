    <?php
    $uzytkownicy = array(
        "AAAA" => "aaaa",
        "BBBB" => "bbbb",
        "CCCC" => "cccc"
    );
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
        if (!isset($_POST["user"]) || $_SERVER["REQUEST_METHOD"] != "POST") {
            echo "<p>Witaj niezalogowany użytkowniku!</p>";
            return;
        }

        $user = $_GET["user"];
        $pass = $_GET["pass"];

        $zal_uzytkownik = "Gość";
        foreach ($uzytkownicy as $u => $p) {
            if ($u === $user && $p === $pass)
                $zal_uzytkownik = $user;
                break;
        }
        echo "<p>Witaj: $zal_uzytkownik!</p>";
        ?>
    </body>

    </html>