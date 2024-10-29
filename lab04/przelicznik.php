<?php
$przelicznik = array(
    'Arshin' => array(0.7112, 'Rosyjska jednostka długości używana do XVIII wieku.'),
    'Cubit' => array(0.4572, 'Jednostka starożytnego Egiptu i Mezopotamii, odpowiadająca długości przedramienia.'),
    'League' => array(4828.03, 'Jednostka miary stosowana w Europie i Ameryce, odpowiadająca około 3 milom.'),
    'Ell' => array(1.143, 'Stosowana w Anglii i Szkocji jednostka odpowiadająca około długości łokcia.'),
    'Furlong' => 201.168,
    'Jednostka używana głównie w Anglii, odpowiadająca 1/8 mili.'
);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="" method="get">
    <input type="number" name="wartosc">
    <select name="jednostka">
        <option value="Arshin">Arshin</option>
        <option value="Cubit">Cubit</option>
        <option value="League">League</option>
        <option value="Ell">Ell</option>
        <option value="Furlong">Furlong</option>
    </select>
    <input type="submit" value="Przelicz">
</form>
<?php
if(!isset($_GET["wartosc"]) || !isset($_GET["jednostka"]) || !is_numeric($_GET["wartosc"]))
    return;

$ile = $_GET["wartosc"];
$jednostka =$_GET["jednostka"];
foreach($przelicznik as $klucz=>$wartosc)
{
    if($klucz===$jednostka)
    {
        echo "<p>Wynik=", $ile * $wartosc[0], "</p>";
        echo "<p>$wartosc[1]</p>";
    }
        
}
?>

<body>

</body>

</html>