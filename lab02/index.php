<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
    <h2>Ćwiczenie 1</h2>
    </style>
    <?php
        $wiersze = 20;
        $kolumny = 15;
        // $ile = 0;
        echo "<table style=\"border: 1px solid green;\">";
        for($i=0; $i<$wiersze; $i++)
        {
            echo "<tr>";
              for($j=0; $j<$kolumny; $j++)
                {
                    echo "<td style=\"background-color: aquamarine;\">";
                    // echo $ile++;
                    echo $i*$kolumny + $j;
                    echo "</td>";
                }
            echo "</tr>";
        }
        echo "</table>";
    ?>
  </body>
</html>

