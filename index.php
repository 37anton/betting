<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $gainA = 0;
    $gainN = 0;
    $gainB = 0;

    $a = floatval(readline("combien vaut a : "));
    echo 'a : ' . $a . '<br>';
    $n = floatval(readline("combien vaut n : "));
    echo 'n : ' . $n . '<br>';
    $b = floatval(readline("combien vaut b : "));
    echo 'b : ' . $b . '<br><br>';

    $resultatTableau = array(array(0, 0, 8, 0, 0, 0));



    for ($i = 1; $i <= 50; $i++) {
        for ($j = 1; $j < 300; $j++) {
            for ($k = 1; $k < 300; $k++) {
                $gainA = $i * $a - $i - $j - $k;
                $gainN = $j * $n - $i - $j - $k;
                $gainB = $k * $b - $i - $j - $k;

                if ($gainA > 0 && $gainN > 0 && $gainB > 0) {
                    // echo 'mises <br>';
                    // echo $i . '<br>';
                    // echo $j . '<br>';
                    // echo $k . '<br>';
                    // echo 'gains <br>';
                    // echo $gainA . '<br>';
                    // echo $gainN . '<br>';
                    // echo $gainB . '<br>';

                    // $tab = array($i, $j, $k, $gainA, $gainN, $gainB);
                    // echo $tab[0] . ', ' . $tab[1] . ', ' . $tab[2] . ', ' . $tab[3] . ', ' . $tab[4] . ', ' . $tab[5];
                    // print_r($tab);
                    // echo '<br>';

                    array_push($resultatTableau, array($i, $j, $k, $gainA, $gainN, $gainB));
                }
            }
        }
    }

    unset($resultatTableau[0]);

    // print_r($resultatTableau);

    echo '<table>';
    echo "<thead>";
    echo '<tr>';
    echo '<th>bet a</th>';
    echo '<th>bet n</th>';
    echo '<th>bet b</th>';
    echo '<th>win a</th>';
    echo '<th>win n</th>';
    echo '<th>win b</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($resultatTableau as $ligne) {
        echo '<tr>';
        echo '<td>' . $ligne[0] . '</td>';
        echo '<td>' . $ligne[1] . '</td>';
        echo '<td>' . $ligne[2] . '</td>';
        echo '<td>' . $ligne[3] . '</td>';
        echo '<td>' . $ligne[4] . '</td>';
        echo '<td>' . $ligne[5] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

    ?>



</body>

</html>