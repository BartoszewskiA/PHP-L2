<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    if (isset($_POST['uzytkownik'])) {
        setcookie("user", $_POST['uzytkownik'], time() + 60 * 60);
    }

    if (isset($_COOKIE['user']) || isset($_POST['uzytkownik'])) {
        if (isset($_POST['uzytkownik']))
            $user = $_POST['uzytkownik'];
        else
            $user = $_COOKIE['user'];
        echo "<p>Witaj $user</p>";
        echo '<form action="logout.php" method="post">';
        echo '<input type="hidden" name="wyloguj">';
        echo '<input type="submit" value="Wyloguj">';
        echo '</form>';
    } else {
        echo '<form action="" method="post">';
        echo '<input type="text" name="uzytkownik">';
        echo '<input type="submit" value="Zaloguj się">';
        echo '</form>';
    }
    ?>
</body>

</html>